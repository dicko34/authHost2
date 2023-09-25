<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return view
     */
    public function index(Request $request)
    {
        $cars = collect(DB::select("select * from cars where state = 'allowed' LIMIT 6"));
        $generals =  collect(DB::select("select * from generals where state = 'allowed' LIMIT 6"));
        $homes =  collect(DB::select("select * from homes where state = 'allowed' LIMIT 6"));
        $jobs =  collect(DB::select("select * from jobs where state = 'allowed' LIMIT 6"));
        $lands =  collect(DB::select("select * from lands where state = 'allowed' LIMIT 6"));
        $mobiles =  collect(DB::select("select * from mobiles where state = 'allowed' LIMIT 6"));
        $shops =  collect(DB::select("select * from shops where state = 'allowed' LIMIT 6"));
        return view('vendor.home', \compact('cars', 'generals', 'homes', 'jobs', 'lands', 'mobiles', 'shops'));
    }

     /**
     * Get search result.
     *
     * @return Respone::json()
     */
    public function search(Request $request)
    {
        $results = Home::whereLike(['show','home_type','extras'],$request->search);
        $home = Home::where(
            [
                ['home_type', '=', json_encode( $request->search)],
                ['show', '=', json_encode( $request->search)],
            ]
        )->get();

        $job = Job::where(
            [
                ['city', json_encode($request->city) == 'الكل' ? '!=' : '=', json_encode($request->city) == 'الكل' ? null :json_encode( $request->city)],
                ['address', json_encode($request->address) == 'الكل' ? '!=' : '=', json_encode($request->address) == 'الكل' ? null : json_encode($request->address)],
            ]
        )->get();

        return ($request);
    }
}
