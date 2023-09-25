<?php

namespace App\Http\Controllers\Site;

use App\Models\Land;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandsController extends Controller
{
    use Traits\SimilarTrait;
    public function index()
    {
        $lands =Land::paginate(6);
        return view('vendor.lands.index',compact('lands'));
    }

    public function search(Request $request)
    {
        $lands =  Land::all();
        $lands_show = Land::where(
            [
                ['workplace', $request->workplace == 'الكل' ? '!=' : '=', $request->workplace == 'الكل' ? null : $request->workplace],
                ['specialization', $request->specialization == 'الكل' ? '!=' : '=', $request->specialization == 'الكل' ? null : $request->specialization],
                ['permanence', $request->permanence == 'الكل' || $request->permanence == '' ? '!=' : '=', $request->permanence == 'الكل' ? null : $request->permanence],
            ]
        )->paginate(6);
        
        if (count($lands_show) < 1) {
            $lands_show =  Land::paginate(6);
        } 
        return view('vendor.lands.search');
    }

    public function product(Request $request)
    {
        $lands = Land::paginate(6);

        $land = Land::find($request->land);
        $similar = $this->similar($lands, $land, ['brief' => 30,'area'=>70]);
        return view('vendor.lands.details',compact('lands','land','similar'));
    }

    public function add()
    {
        return view('vendor.lands.add');
    }

}
