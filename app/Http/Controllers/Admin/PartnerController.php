<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Support\PublicUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PartnerController extends Controller
{
    public function index(): View
    {
        $partners = Partner::query()->orderBy('sort_order')->orderBy('name')->paginate(20);
        $activeCount = Partner::query()->where('is_active', true)->count();
        $totalCount = Partner::query()->count();

        return view('admin.partners.index', compact('partners', 'activeCount', 'totalCount'));
    }

    public function create(): View
    {
        return view('admin.partners.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedData($request, true);

        try {
            $data['logo'] = $this->storeLogo($request);
        } catch (\Throwable $exception) {
            return back()
                ->withErrors(['logo' => 'Could not save the logo. Check folder permissions for images/partners.'])
                ->withInput();
        }

        Partner::create($data);

        return redirect()
            ->route('admin.partners.index')
            ->with('success', 'Partner added successfully.');
    }

    public function edit(Partner $partner): View
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner): RedirectResponse
    {
        $data = $this->validatedData($request, false);

        if ($request->hasFile('logo')) {
            try {
                if (filled($partner->logo) && str_starts_with($partner->logo, 'images/partners/')) {
                    PublicUpload::delete($partner->logo);
                }

                $data['logo'] = $this->storeLogo($request);
            } catch (\Throwable $exception) {
                return back()
                    ->withErrors(['logo' => 'Could not save the logo. Check folder permissions for images/partners.'])
                    ->withInput();
            }
        }

        $partner->update($data);

        return redirect()
            ->route('admin.partners.index')
            ->with('success', 'Partner updated successfully.');
    }

    public function destroy(Partner $partner): RedirectResponse
    {
        if (filled($partner->logo) && str_starts_with($partner->logo, 'images/partners/')) {
            PublicUpload::delete($partner->logo);
        }

        $partner->delete();

        return redirect()
            ->route('admin.partners.index')
            ->with('success', 'Partner removed.');
    }

    private function validatedData(Request $request, bool $logoRequired): array
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:9999'],
            'is_active' => ['nullable', 'boolean'],
            'logo' => [$logoRequired ? 'required' : 'nullable', 'image', 'max:4096'],
        ];

        $data = $request->validate($rules);

        return [
            'name' => $data['name'],
            'sort_order' => (int) ($data['sort_order'] ?? 0),
            'is_active' => $request->boolean('is_active'),
        ];
    }

    private function storeLogo(Request $request): string
    {
        $extension = strtolower($request->file('logo')->getClientOriginalExtension() ?: 'png');
        $filename = 'partner-'.Str::lower(Str::random(10)).'.'.$extension;

        return PublicUpload::storeUploadedFile(
            $request->file('logo'),
            'images/partners',
            $filename
        );
    }
}
