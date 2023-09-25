<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shop;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shops.index')->with("shops",Shop::all());
    }

    public function new()
    {
        $date = Carbon::today()->subDays(30);
        $shops = Shop::where('created_at','>=',$date)->get();
        return view('admin.shops.new')->with('shops',$shops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shops.create');
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
            'offre' =>  'required|max:30',
            'displayed' =>  'required|max:30',
            'brief' =>  'required|max:20',
            'loung' =>  'required|max:20',
            'price' =>  'required|max:20',
            'description' =>  'required|max:500',
            'img'=> 'required',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'gov' =>  'required|max:20',
            'city' => 'required|max:30',
            'street' =>  'required|max:20',
            'ad_duration_per_day' =>  'required|max:20',
            'address' => 'required|max:100',            
            'advertiser_name' => 'required|max:30',
            'phone_number' =>  'required|max:20',
            'mobile' => 'required|max:20',
            'email' =>  'required|email',
            'advertiser_city' =>  'required|max:20',
            'advertiser_address' => 'required|max:100'
        ]);
        //
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(Carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(public_path('assets/site/images/Shops'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Shop::create($validate);
        return redirect()->route('admin.shops.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = Shop::find($id);
        return view('admin.shops.show')->with('shop',$shop);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.shops.edit')->with("shop",Shop::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop )
    {
        $uploaded_imgs = explode(',',$shop->img);
        $validate = $request->validate([
            'offre' =>  'required|max:30',
            'displayed' =>  'required|max:30',
            'brief' =>  'required|max:20',
            'loung' =>  'required|max:20',
            'price' =>  'required|max:20',
            'description' =>  'required|max:500',
            'img'=> 'nullable',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'gov' =>  'required|max:20',
            'city' => 'required|max:30',
            'street' =>  'required|max:20',
            'ad_duration_per_day' =>  'required|max:20',
            'address' => 'required|max:100',            
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
                \unlink(public_path('assets/site/images/shops').'/'.$img_path); 
            }
            foreach($imgs as $file_image ) {
                $imageName =  Str::of(Carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
                $file_image->move(public_path('assets/site/images/shops'), $imageName); // move the new img 
                array_push($validate['img'],$imageName); // store image name to db
               // dd($imageName);
            }
            $validate['img'] = implode(',',$validate['img']);
    
        } else {
            $validate['img'] = implode(',',$uploaded_imgs);
        }
        
        $shop->update($validate );
       return  redirect()->route('admin.shops.index',['data' => "shops $request->advertiser_name updated successfully"]);
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
    public function changeState(Request $request,Shop $shop)
    {
        $action = $request->query("action");
        $shop->update(['state' =>$action] );
    
        return  redirect()->route('admin.shops.index');
        
    }
}
