<?php

namespace App\Http\Controllers\Vendor;
use App\Models\Land;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\AdvertiserInfo;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class LandController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validate = $request->validate([
            'brief' =>  'required|max:30',
            'area' =>  'required|max:30',
            'price' =>  'required|max:20',
            'located_on' =>  'required|max:30',
            'features' =>  'required|max:200',
            'surrounded_by' =>  'required|max:50',
            'description' =>  'required|max:500',
            'img'=> 'required',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'ad_duration_per_day' =>  'required|max:20',
            'address' => 'required|max:100',            
            'advertiser_name' => [
                New AdvertiserInfo(), 'max:20'
            ],
            'phone_number' => [
                New AdvertiserInfo(), 'max:20'
            ],
            'mobile' => [
                New AdvertiserInfo(), 'max:20'
            ],
            'email' =>  [
                New AdvertiserInfo(), 'max:20','email'
            ],
            'city' => [
                New AdvertiserInfo(), 'max:20'
            ],
        ]);
        if($request->user()) {
            $credentilas = $request->user();
            $validate["advertiser_name"] = $credentilas->name;
            $validate["phone_number"] = $credentilas->phone;
            $validate["mobile"] = null;
            $validate["email"] = $credentilas->email;
        }
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(public_path('assets/site/images/lands'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Land::create($validate);
        return redirect()->route('land.index');
    }

    /**
     * Display the searched resource from storage .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
     {
        $lands = Land::all();
         $lands_show = Land::where(
            [['company',$request->company == 'الكل'? '!=': '='  ,$request->company == 'الكل' ? null : $request->company ],
            ['model',$request->model == 'الكل'? '!=': '='  ,$request->model == 'الكل' ? null : $request->model ],
            ['city',$request->city == 'الكل'? '!=': '='  ,$request->city == 'الكل' ? null : $request->city ],
            ['fuel_type',$request->fuel_type == 'الكل'? '!=': '='  ,$request->fuel_type == 'الكل' ? null : $request->fuel_type ],
            ['lime_type',$request->lime_type == 'الكل'? '!=': '='  ,$request->lime_type == 'الكل' ? null : $request->lime_type ],
            ['driving_license',$request->driving_license == 'الكل'? '!=': '='  ,$request->driving_license == 'الكل' ? null : $request->driving_license ],]
        )->whereBetween('price',[$request->price_min,$request->price_max])->get();
        return view('vendor.lands.index',compact('lands_show','lands'));
     }
}
