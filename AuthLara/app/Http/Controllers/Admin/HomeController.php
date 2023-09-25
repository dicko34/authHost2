<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.homes.index')->with("homes",Home::all());
    }

    public function new()
    {
        $date = Carbon::today()->subDays(30);
        $homes = Home::where('created_at','>=',$date)->get();
        return view('admin.homes.new')->with('homes',$homes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homes.create');
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
            'show' =>  'required|max:30',
            'home_type' =>  'required|max:30',
            'status' =>  'required|max:20',
            'rooms_number' =>  'required|max:20',
            'bathrooms_number' =>  'required|max:20',
            'kitchen_number' => 'required|max:20',
            'loung' =>  'required|max:20',
            'area' =>  'required|max:20',
            'land_area' =>  'required|max:20',
            'price' =>  'required|max:20',
            'gov' =>  'required|max:20',
            'city' => 'required|max:30',
            'street' =>  'required|max:20',
            'address' => 'required|max:100',
            'ad_duration_per_day' =>  'required|max:20',
            'extras' =>  'required|max:500',
            'description' =>  'required|max:500',
            'img'=> 'required',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'advertiser_name' => 'required|max:30',
            'phone_number' =>  'required|max:20',
            'mobile' => 'required|max:20',
            'email' =>  'required|email',
            'advertiser_city' =>  'required|max:20',
            'advertiser_address' => 'required|max:100'
        ]);
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(public_path('assets/site/images/homes'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Home::create($validate);
        return redirect()->route('admin.homes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $home = Home::find($id);
        return view('admin.homes.show')->with('home',$home);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.homes.edit')->with("home",Home::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home )
    {
        $uploaded_imgs = explode(',',$home->img);
        $validate = $request->validate([
            'show' =>  'required|max:30',
            'home_type' =>  'required|max:30',
            'status' =>  'required|max:20',
            'rooms_number' =>  'required|max:20',
            'bathrooms_number' =>  'required|max:20',
            'kitchen_number' => 'required|max:20',
            'loung' =>  'required|max:20',
            'area' =>  'required|max:20',
            'land_area' =>  'required|max:20',
            'price' =>  'required|max:20',
            'gov' =>  'required|max:20',
            'city' => 'required|max:30',
            'street' =>  'required|max:20',
            'address' => 'required|max:100',
            'ad_duration_per_day' =>  'required|max:20',
            'extras' =>  'required|max:500',
            'description' =>  'required|max:500',
            'img'=> 'nullable',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'advertiser_name' => 'required|max:30',
            'phone_number' =>  'required|max:20',
            'mobile' => 'required|max:20',
            'email' =>  'required|email',
            'advertiser_city' =>  'required|max:20',
            'advertiser_address' => 'required|max:100'
        ]);
        
        if(isset($validate['img']) && !empty( $validate['img'])) {
            $imgs = $request->file('img');
            $validate['img'] = [];
            foreach($uploaded_imgs as $img_path ) {
                \unlink(public_path('assets/site/images/homes').'/'.$img_path); 
            }
            foreach($imgs as $file_image ) {
                $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
                $file_image->move(public_path('assets/site/images/homes'), $imageName); // move the new img 
                array_push($validate['img'],$imageName); // store image name to db
               // dd($imageName);
            }
            $validate['img'] = implode(',',$validate['img']);
    
        } else {
            $validate['img'] = implode(',',$uploaded_imgs);
        }
        
        $home->update($validate );
       return  redirect()->route('admin.homes.index',['data' => "homes $request->advertiser_name updated successfully"]);
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
    public function changeState(Request $request,Home $home)
    {
        $action = $request->query("action");
        $home->update(['state' =>$action] );
    
        return  redirect()->route('admin.homes.index');
        
    }
}
