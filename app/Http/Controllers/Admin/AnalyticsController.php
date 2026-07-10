<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageView;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AnalyticsController extends Controller
{
    public function index(): View
    {
        $totalViews = PageView::count();
        $viewsToday = PageView::whereDate('created_at', today())->count();
        $viewsThisWeek = PageView::where('created_at', '>=', now()->startOfWeek())->count();
        $viewsThisMonth = PageView::where('created_at', '>=', now()->startOfMonth())->count();

        $uniqueVisitorsToday = PageView::whereDate('created_at', today())
            ->distinct('session_id')
            ->count('session_id');

        $uniqueVisitorsWeek = PageView::where('created_at', '>=', now()->subDays(7))
            ->distinct('session_id')
            ->count('session_id');

        $topPages = PageView::select('url', DB::raw('count(*) as views'))
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('url')
            ->orderByDesc('views')
            ->limit(10)
            ->get();

        $dailyViews = PageView::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as views'))
            ->where('created_at', '>=', now()->subDays(14))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return view('admin.analytics.index', compact(
            'totalViews',
            'viewsToday',
            'viewsThisWeek',
            'viewsThisMonth',
            'uniqueVisitorsToday',
            'uniqueVisitorsWeek',
            'topPages',
            'dailyViews'
        ));
    }
}
