<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\PageView;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'posts' => Post::count(),
            'published_posts' => Post::published()->count(),
            'testimonials' => Testimonial::active()->count(),
            'enquiries' => Enquiry::count(),
            'new_enquiries' => Enquiry::new()->count(),
            'page_views_today' => PageView::whereDate('created_at', today())->count(),
            'page_views_week' => PageView::where('created_at', '>=', now()->subDays(7))->count(),
            'unique_visitors_week' => PageView::where('created_at', '>=', now()->subDays(7))
                ->distinct('session_id')
                ->count('session_id'),
        ];

        $recentEnquiries = Enquiry::latest()->limit(5)->get();
        $topPages = PageView::select('url', DB::raw('count(*) as views'))
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('url')
            ->orderByDesc('views')
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recentEnquiries', 'topPages'));
    }
}
