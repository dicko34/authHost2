<?php

namespace App\Http\Controllers\Vendor;

use App\Models\mobile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\AdvertiserInfo;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class MobileController extends Controller
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
            'device_status' =>  'required|max:30',
            'model' =>  'required|max:20',
            'reset_model' =>  'required|max:30',
            'slides_number' =>  'required|max:20',
            'screen_size' =>  'required|max:30',
            'cameras' =>  'required|max:30',
            'memory' =>  'required|max:20',
            'storage' =>  'required|max:30',
            'price' =>  'required|max:30',
            'description' =>  'required|max:500',
            'address' => 'required|max:100',
            'img'=> 'nullable',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'ad_duration_per_day' =>  'required|max:20',
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
            $file_image->move(public_path('assets/site/images/mobiles'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Mobile::create($validate);
        return redirect()->route('mobile.index');
    }

    
}
