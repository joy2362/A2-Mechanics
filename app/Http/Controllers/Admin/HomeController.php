<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Visitor;
use App\Models\VisitorFeedback;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        $hitCount = Visitor::select(DB::raw("sum(hits) as count"), DB::raw("MONTHNAME(created_at) as month_name"),DB::raw('max(created_at) as createdAt'))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_name')
            ->orderBy('createdAt')
            ->get();

        $lineChart = Visitor::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"),DB::raw('max(created_at) as createdAt'))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_name')
            ->orderBy('createdAt')
            ->get();

        $visitors = Visitor::totalVisitor();
        $totalHit = Visitor::totalHits();
        $recentVisit = Visitor::totalRecentVisit(10);

        $member  = Team::all()->count();
        $service  = Work::all()->count();
        $question  = VisitorFeedback::where('type',VisitorFeedback::QUESTION)->count();
        $message  = VisitorFeedback::where('type',VisitorFeedback::MESSAGE)->count();

        return view('backend.pages.home.index',[
            'totalHit'=>$totalHit,
            'visitors'=>$visitors,
            'recentVisit'=>$recentVisit,
            'lineChart'=>$lineChart,
            'hitCount'=>$hitCount,
            'TotalMember'=>$member,
            'service'=>$service,
            'UserQuestion'=>$question,
            'message'=>$message,
        ]);
    }
}
