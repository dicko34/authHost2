<?php

namespace App\Http\Controllers\Vendor;
use App\Models\Cars;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Rules\AdvertiserInfo;

class CarController extends Controller
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
            'model' =>  'required|max:30',
            'company' =>  'max:30',
            'reset_model' =>  'required|max:20',
            'model_year' =>  'required|max:20',
            'car_color' =>  'required|max:20',
            'power' => 'required|max:20',
            'passengers' =>  'required|max:20',
            'car_usage' => 'required|max:50',
            'drive_type' =>  'required|max:20',
            'speedmotors' =>  'required|max:20',
            'origin' =>  'required|max:20',
            'price' =>  'required|max:20',
            'ad_duration_per_day' =>  'required|max:20',
            'driving_license' => 'required|max:30',
            'fuel_type' =>  'required|max:20',
            'lime_type' => 'required|max:20',
            'glass' =>  'required|max:20',
            'shown' => 'required|max:20',
            'pay_method' =>  'required|max:20',
            'extras' =>  'required|max:500',
            'address' => 'required|max:100',
            'description' =>  'required|max:600',
            'img'=> 'required',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
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
           
            $file_image->move(config('app.image_path')('cars'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db

        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        
        Cars::create($validate);
        return redirect()->route('car.index');
    }

}
