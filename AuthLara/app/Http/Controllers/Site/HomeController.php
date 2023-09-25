<?php

namespace App\Http\Controllers\Site;

use App\Models\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use Traits\SimilarTrait;
    public function index(Request $request)
    {
        $homes = Home::paginate(6);

        return view('vendor.homes.index', compact('homes'));
    }

    public function search(Request $request)
    {
        
        $homes = Home::paginate(6);

        $homes_show = Home::where(
            [
                ['city', json_encode($request->city) == 'الكل' ? '!=' : '=', json_encode($request->city) == 'الكل' ? null :json_encode( $request->city)],
                ['address', json_encode($request->address) == 'الكل' ? '!=' : '=', json_encode($request->address) == 'الكل' ? null : json_encode($request->address)],
            ]
        )->paginate(6);
        if (count($homes_show) < 1) {
            dd($request, $homes_show);
            $homes_show =  Home::paginate(6);
        }
        return view('vendor.homes.search', compact('homes_show', 'homes'));
    }

    public function product(Request $request)
    {
        $homes = Home::all();
        $home = Home::find($request->home);
        $similar = $this->similar($homes, $home, ['show' => 30, 'price' => 70]);
        return view('vendor.homes.details', compact('homes', 'home', 'similar'));
    }

    public function add()
    {
        $homes = Home::all();
        return view('vendor.homes.add', compact('homes'));
    }
}
