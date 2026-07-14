<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Support\PublicUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class TeamMemberController extends Controller
{
    public function index(): View
    {
        $members = TeamMember::orderBy('sort_order')->paginate(10);
        $totalCount = TeamMember::count();
        $activeCount = TeamMember::where('is_active', true)->count();
        $withCvCount = TeamMember::orderBy('sort_order')->get()->filter->hasCv()->count();

        return view('admin.team-members.index', compact('members', 'totalCount', 'activeCount', 'withCvCount'));
    }

    public function edit(TeamMember $teamMember): View
    {
        return view('admin.team-members.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'mobile' => ['nullable', 'string', 'max:50'],
            'bio' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:5120'],
            'cv' => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
            'is_active' => ['sometimes', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'social.instagram' => ['nullable', 'string', 'max:500'],
            'social.facebook' => ['nullable', 'string', 'max:500'],
            'social.linkedin' => ['nullable', 'string', 'max:500'],
        ]);

        $socialInput = $data['social'] ?? [];
        $normalizeSocialUrl = static function (?string $url): string {
            $url = trim((string) $url);

            return $url !== '' ? $url : '#';
        };

        $update = [
            'name' => $data['name'],
            'role' => $data['role'],
            'email' => $data['email'] ?? null,
            'mobile' => $data['mobile'] ?? null,
            'bio' => filled($data['bio'] ?? null)
                ? array_values(array_filter(array_map('trim', explode("\n", $data['bio']))))
                : [],
            'social' => [
                'instagram' => $normalizeSocialUrl($socialInput['instagram'] ?? null),
                'facebook' => $normalizeSocialUrl($socialInput['facebook'] ?? null),
                'linkedin' => $normalizeSocialUrl($socialInput['linkedin'] ?? null),
            ],
            'is_active' => $request->boolean('is_active', true),
            'sort_order' => $data['sort_order'] ?? 0,
        ];

        if ($request->hasFile('image')) {
            $this->deleteStoredTeamImage($teamMember->image);

            $extension = strtolower($request->file('image')->getClientOriginalExtension() ?: 'jpg');
            $filename = Str::slug($data['name']).'-'.Str::lower(Str::random(8)).'.'.$extension;

            try {
                $update['image'] = PublicUpload::storeUploadedFile(
                    $request->file('image'),
                    'images/team',
                    $filename
                );
            } catch (\Throwable $exception) {
                return back()
                    ->withErrors(['image' => 'Could not save the profile photo on the server. Check folder permissions for images/team and PUBLIC_UPLOAD_ROOT.'])
                    ->withInput();
            }
        }

        if ($request->hasFile('cv')) {
            if ($teamMember->cv_path) {
                Storage::disk('public')->delete($teamMember->cv_path);
            }
            $filename = Str::slug($data['name']).'-cv.'.$request->file('cv')->getClientOriginalExtension();
            $update['cv_path'] = $request->file('cv')->storeAs('cv', $filename, 'public');
        }

        $teamMember->update($update);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member updated successfully.');
    }

    private function deleteStoredTeamImage(?string $path): void
    {
        if (! filled($path)) {
            return;
        }

        $path = ltrim(str_replace('\\', '/', $path), '/');

        // Seeded/static assets under public/images (except images/team uploads) stay untouched.
        if (str_starts_with($path, 'images/') && ! str_starts_with($path, 'images/team/')) {
            return;
        }

        if (str_starts_with($path, 'visaland-html/')) {
            return;
        }

        if (str_starts_with($path, 'images/team/')) {
            PublicUpload::delete($path);

            return;
        }

        // Legacy storage/app/public/team uploads.
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
