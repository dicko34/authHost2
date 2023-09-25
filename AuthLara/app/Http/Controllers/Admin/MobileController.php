<?php

namespace App\Http\Controllers\Admin;

use App\Models\mobile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.mobiles.index')->with("mobiles",Mobile::all());
    }

    public function new()
    {
        $date = Carbon::today()->subDays(30);
        $mobiles = Mobile::where('created_at','>=',$date)->get();
        return view('admin.mobiles.new')->with('mobiles',$mobiles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobiles.create');
    }

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
            'company' =>  'required|max:30',
            'model' =>  'required|max:20',
            'model_year' =>  'required|integer',
            'reset_model' =>  'required|max:30',
            'slides_number' =>  'required|max:20',
            'screen_size' =>  'required|max:30',
            'cameras' =>  'required|max:30',
            'memory' =>  'required|max:20',
            'storage' =>  'required|max:30',
            'price' =>  'required|max:30',
            'description' =>  'required|max:500',
            'img'=> 'nullable',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'ad_duration_per_day' =>  'required|max:20',
            'advertiser_name' => 'required|max:30',
            'phone_number' =>  'required|max:20',
            'email' =>  'required|email',
            'advertiser_city' =>  'required|max:20',
            'advertiser_address' => 'required|max:100'
        ]);
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(public_path('assets/site/images/mobiles'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Mobile::create($validate);
        return redirect()->route('admin.mobiles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobile = Mobile::find($id);
        return view('admin.mobiles.show')->with('mobile',$mobile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.mobiles.edit')->with("mobile",Mobile::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobile $mobile )
    {
        $uploaded_imgs = explode(',',$mobile->img);
        $validate = $request->validate([
            'device_status' =>  'required|max:30',
            'company' =>  'required|max:30',
            'model' =>  'required|max:20',
            'model_year' =>  'required|integer',
            'reset_model' =>  'required|max:30',
            'slides_number' =>  'required|max:20',
            'screen_size' =>  'required|max:30',
            'cameras' =>  'required|max:30',
            'memory' =>  'required|max:20',
            'storage' =>  'required|max:30',
            'price' =>  'required|max:30',
            'description' =>  'required|max:500',
            'img'=> 'nullable',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'ad_duration_per_day' =>  'required|max:20',
            'advertiser_name' => 'required|max:30',
            'phone_number' =>  'required|max:20',
            'email' =>  'required|email',
            'advertiser_city' =>  'required|max:20',
            'advertiser_address' => 'required|max:100'
        ]);
        if(isset($validate['img']) && !empty( $validate['img'])) {
            $imgs = $request->file('img');
            $validate['img'] = [];
            foreach($uploaded_imgs as $img_path ) {
                \unlink(public_path('assets/site/images/mobiles').'/'.$img_path); 
            }
            foreach($imgs as $file_image ) {
                $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
                $file_image->move(public_path('assets/site/images/mobiles'), $imageName); // move the new img 
                array_push($validate['img'],$imageName); // store image name to db
               // dd($imageName);
            }
            $validate['img'] = implode(',',$validate['img']);
    
        } else {
            $validate['img'] = implode(',',$uploaded_imgs);
        }
        
        $mobile->update($validate );
       return  redirect()->route('admin.mobiles.index',['data' => "mobiles $request->advertiser_name updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function changeState(Request $request,Mobile $mobile)
    {
        $action = $request->query("action");
        $mobile->update(['state' =>$action] );
    
        return  redirect()->route('admin.mobiles.index');
        
    }
}
