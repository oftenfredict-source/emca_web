<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
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
        return view('pages.team');
    }

    public function teamDetails()
    {
        return view('pages.team-details');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function newsGrid()
    {
        return view('pages.news-grid');
    }

    public function newsDetails()
    {
        return view('pages.news-details');
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

        $view = 'pages.solutions.' . $slug;

        if (! view()->exists($view)) {
            abort(404);
        }

        return view($view, [
            'solution' => $solutions[$slug],
            'slug' => $slug,
        ]);
    }
}
