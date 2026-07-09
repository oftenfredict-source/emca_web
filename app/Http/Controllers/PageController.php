<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\TeamMember;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.index', [
            'testimonials' => Testimonial::active()->get(),
            'latestPosts' => Post::published()->latest('published_at')->limit(3)->get(),
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'testimonials' => Testimonial::active()->get(),
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function serviceDetails(string $slug)
    {
        $services = config('emca-services');

        if (! isset($services[$slug])) {
            abort(404);
        }

        return view('pages.service-details', [
            'service' => $services[$slug],
            'slug' => $slug,
        ]);
    }

    public function team()
    {
        return view('pages.team', [
            'members' => TeamMember::active()->get(),
        ]);
    }

    public function teamDetails(string $slug)
    {
        $member = TeamMember::active()->where('slug', $slug)->first();

        if (! $member) {
            abort(404);
        }

        return view('pages.team-details', [
            'member' => $this->formatTeamMember($member),
            'slug' => $slug,
        ]);
    }

    public function news()
    {
        $posts = Post::published()->latest('published_at')->paginate(9);

        return view('pages.blogs', [
            'latestPosts' => $posts,
        ]);
    }

    public function newsDetails(string $slug)
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();

        return view('pages.blog-details', [
            'post' => $post,
            'recentPosts' => Post::published()
                ->where('id', '!=', $post->id)
                ->latest('published_at')
                ->limit(3)
                ->get(),
        ]);
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function coaching()
    {
        return view('pages.coaching');
    }

    public function coachingDetails()
    {
        return view('pages.coaching-details');
    }

    public function country()
    {
        return view('pages.country');
    }

    public function countryDetails()
    {
        return view('pages.country-details');
    }

    public function solutions()
    {
        return view('pages.solutions');
    }

    public function solution(string $slug)
    {
        $solutions = config('solutions');

        if (! isset($solutions[$slug])) {
            abort(404);
        }

        $view = 'pages.solutions.'.$slug;

        if (! view()->exists($view)) {
            abort(404);
        }

        return view($view, [
            'solution' => $solutions[$slug],
            'slug' => $slug,
        ]);
    }

    private function formatTeamMember(TeamMember $member): array
    {
        return [
            'name' => $member->name,
            'role' => $member->role,
            'image' => $member->imageUrl(),
            'email' => $member->email,
            'mobile' => $member->mobile,
            'style' => $member->style,
            'delay' => $member->delay,
            'bio' => $member->bio ?? [],
            'social' => $member->social ?? [],
            'cv' => $member->cvUrl(),
        ];
    }
}
