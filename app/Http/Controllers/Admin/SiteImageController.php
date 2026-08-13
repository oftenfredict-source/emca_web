<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteImage;
use App\Services\SiteImageService;
use App\Services\SiteSettingService;
use App\Support\PublicUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class SiteImageController extends Controller
{
    public function __construct(
        private readonly SiteImageService $siteImages,
        private readonly SiteSettingService $siteSettings
    ) {}

    public function index(Request $request): View
    {
        $this->siteImages->syncCatalog();

        $groups = config('site-images.groups', []);
        $groupKeys = array_keys($groups);
        $activeGroup = (string) $request->query('group', $groupKeys[0] ?? 'brand');

        if ($groupKeys !== [] && ! array_key_exists($activeGroup, $groups)) {
            $activeGroup = $groupKeys[0];
        }

        $images = SiteImage::query()
            ->where('group', $activeGroup)
            ->orderBy('sort_order')
            ->get();

        return view('admin.site-images.index', [
            'groups' => $groups,
            'activeGroup' => $activeGroup,
            'activeGroupLabel' => $groups[$activeGroup] ?? 'Site Images',
            'images' => $images,
            'heroMode' => $this->siteSettings->heroMode(),
            'heroYoutubeUrl' => $this->siteSettings->heroYoutubeUrl(),
            'heroYoutubeId' => $this->siteSettings->heroYoutubeId(),
        ]);
    }

    public function updateHeroSettings(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'hero_mode' => ['required', Rule::in(['slides', 'video'])],
            'hero_youtube_url' => ['nullable', 'string', 'max:500'],
        ]);

        $youtubeUrl = trim((string) ($data['hero_youtube_url'] ?? ''));

        if ($data['hero_mode'] === 'video') {
            if ($youtubeUrl === '') {
                return back()
                    ->withErrors(['hero_youtube_url' => 'Paste a YouTube link when Hero type is Video.'])
                    ->withInput();
            }

            if ($this->siteSettings->extractYoutubeId($youtubeUrl) === null) {
                return back()
                    ->withErrors(['hero_youtube_url' => 'Enter a valid YouTube link or video ID.'])
                    ->withInput();
            }
        }

        $this->siteSettings->setMany([
            'hero_mode' => $data['hero_mode'],
            'hero_youtube_url' => $youtubeUrl,
        ]);

        return redirect()
            ->route('admin.site-images.index', ['group' => 'hero'])
            ->with('success', 'Homepage hero settings updated.');
    }

    public function update(Request $request, SiteImage $siteImage): RedirectResponse
    {
        $request->validate([
            'image' => ['required', 'image', 'max:8192'],
        ]);

        $extension = strtolower($request->file('image')->getClientOriginalExtension() ?: 'jpg');
        $filename = $siteImage->key.'-'.Str::lower(Str::random(8)).'.'.$extension;

        try {
            if ($siteImage->isCustom() && filled($siteImage->path)) {
                PublicUpload::delete($siteImage->path);
            }

            $path = PublicUpload::storeUploadedFile(
                $request->file('image'),
                'images/site',
                $filename
            );
        } catch (\Throwable $exception) {
            return back()
                ->withErrors(['image' => 'Could not save the image. Check folder permissions for images/site and PUBLIC_UPLOAD_ROOT.'])
                ->withInput();
        }

        $siteImage->update(['path' => $path]);
        $this->siteImages->forgetCache();

        return back()->with('success', $siteImage->label.' updated successfully.');
    }

    public function restore(SiteImage $siteImage): RedirectResponse
    {
        if ($siteImage->isCustom() && filled($siteImage->path)) {
            PublicUpload::delete($siteImage->path);
        }

        $siteImage->update(['path' => null]);
        $this->siteImages->forgetCache();

        return back()->with('success', $siteImage->label.' restored to the default image.');
    }
}
