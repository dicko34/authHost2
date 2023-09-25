<?php

namespace App\Http\Controllers\Vendor;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.users.index')->with("users",User::all());
    }

    public function new()
    {
        $date = Carbon::today()->subDays(30);
        $users = User::where('created_at','>=',$date)->get();
        return view('vendor.users.new')->with('users',$users);
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
             'fname' =>  'required|max:50',
             'lname' =>  'required|max:50',
             'email' =>  'required|email',
             'city' =>  'required|max:50',
             'address' =>  'required|max:200',
             'phone' =>  'required|max:30|min:10',
             'password' => 'min:8',
             'img'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
         ]);
         $file_image =  $request->file('img');
         $imageName =  Str::of(Carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
             $file_image->move(public_path('assets/site/images/users'), $imageName); 
             $validate['img'] = $imageName;
         $validate['password'] =  Hash::make($request->password);

         $validate['state'] = 'pinned';
         user::create($validate );
        return  redirect()->route('vendor.users.index',['data' => "user $request->name update successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('vendor.users.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('vendor.users.edit')->with("user",User::find($id));;
    }

    public function create()
    {
        return view('vendor.users.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
         $validate = $request->validate([
             'fname' =>  'required|max:50',
             'lname' =>  'required|max:50',
             'email' =>  'required|email',
             'city' =>  'required|max:50',
             'address' =>  'required|max:200',
             'phone' =>  'required|max:30|min:10',
             'password' => 'min:8',
             'img'=> 'nullable',

         ]);

         if(isset($validate['img']) && !empty( $validate['img'])) {
            $img = $request->file('img');
                \unlink(public_path('assets/site/images/users').'/'.$user->img); 
                $imageName =  Str::of(Carbon::now()->millisecond().$request->id)->pipe('md5').$img->getClientOriginalName();
                $img->move(public_path('assets/site/images/users'), $imageName);
    
        } else {
            $validate['img'] = $user->img;
        }
         $validate["password"] =  Hash::make($request->password);
        $user->update($validate );
        return  redirect()->route('vendor.users.index',['data' => "user $request->name updatedd successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        foreach(explode(',',$user->img) as $img_path ) {
            \unlink(public_path('assets/site/images/users').'/'.$img_path); 
        }
        return $user->delete();
    }
    public function changeState(Request $request,User $user)
    {
        $action = $request->query("action");
            
            $user->update(['state' =>"$action"] );
        return  redirect()->route('vendor.users.index');
        
    }
   
}
