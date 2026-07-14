<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Support\PublicUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate(10);
        $totalCount = Post::count();
        $publishedCount = Post::where('is_published', true)->count();
        $draftCount = Post::where('is_published', false)->count();

        return view('admin.posts.index', compact('posts', 'totalCount', 'publishedCount', 'draftCount'));
    }

    public function create(): View
    {
        return view('admin.posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedData($request);
        $data['slug'] = Post::generateSlug($data['title']);

        if ($request->hasFile('image')) {
            try {
                $data['image'] = $this->storePostImage($request);
            } catch (\Throwable $exception) {
                return back()
                    ->withErrors(['image' => 'Could not save the blog image. Check images/posts permissions and PUBLIC_UPLOAD_ROOT.'])
                    ->withInput();
            }
        }

        if ($data['is_published'] && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')->with('success', 'Blog post created successfully.');
    }

    public function edit(Post $post): View
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        $data = $this->validatedData($request);

        if ($post->title !== $data['title']) {
            $data['slug'] = Post::generateSlug($data['title'], $post->id);
        }

        if ($request->hasFile('image')) {
            $this->deletePostImage($post->image);

            try {
                $data['image'] = $this->storePostImage($request);
            } catch (\Throwable $exception) {
                return back()
                    ->withErrors(['image' => 'Could not save the blog image. Check images/posts permissions and PUBLIC_UPLOAD_ROOT.'])
                    ->withInput();
            }
        }

        if ($data['is_published'] && empty($data['published_at'])) {
            $data['published_at'] = $post->published_at ?? now();
        }

        if (! $data['is_published']) {
            $data['published_at'] = null;
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $this->deletePostImage($post->image);
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Blog post deleted.');
    }

    private function storePostImage(Request $request): string
    {
        $extension = strtolower($request->file('image')->getClientOriginalExtension() ?: 'jpg');
        $filename = Str::slug(pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME));
        $filename = ($filename !== '' ? $filename : 'post').'-'.Str::lower(Str::random(8)).'.'.$extension;

        return PublicUpload::storeUploadedFile($request->file('image'), 'images/posts', $filename);
    }

    private function deletePostImage(?string $path): void
    {
        if (! filled($path)) {
            return;
        }

        $path = ltrim(str_replace('\\', '/', $path), '/');

        if (str_starts_with($path, 'images/posts/')) {
            PublicUpload::delete($path);
        }

        if (str_starts_with($path, 'posts/') && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'author' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:5120'],
            'is_published' => ['sometimes', 'boolean'],
            'published_at' => ['nullable', 'date'],
        ]) + [
            'is_published' => $request->boolean('is_published'),
        ];
    }
}
