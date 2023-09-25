<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Http\Request;

class generalController extends Controller
{
    use Traits\SimilarTrait;
    public function index()
    {
        $generals = General::paginate(6);
        return view('vendor.general.index', compact('generals'));
    }

    public function search(Request $request)
    {
        $generals = General::paginate(6);
        
        $generals_show = General::where(
            [
                ['category', $request->category == 'الكل' ? '!=' : '=', $request->category == 'الكل' ? null : $request->category],
                ['address', $request->address == 'الكل' || $request->address == '' ? '!=' : '=', $request->address == 'الكل' ? null : $request->address],
            ]
        )->paginate(6);
        if (count($generals_show) < 1) {
            $generals_show =  General::paginate(6);
        }
        return view('vendor.general.search', compact('generals_show', 'generals'));
    }

    public function product(Request $request)
    {
        $generals = General::paginate(5);
        $general = General::find($request->general);
        $similar = $this->similar($generals, $general, ['address' => 30, 'category' => 70]);
        return view('vendor.general.details', compact('generals', 'general', 'similar'));
    }

    public function add()
    {
        $generals = General::all();
        return view('vendor.general.add', compact('generals'));
    }
}
