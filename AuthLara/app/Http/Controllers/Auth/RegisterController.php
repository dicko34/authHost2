<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers, VerifiesEmails;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function showRegistrationForm()
    {
        return view('vendor.register');
    }


    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Models\User
     */

    protected function register(Request $request, User $user)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|string|email|max:255|unique:users',
            'city' => 'required|max:30',
            'address' => 'required|max:100',
            'password' => 'required|string|min:8|confirmed',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $validate['img'] = [];
        $validate['password'] =  Hash::make($request->password);
        $imageName =  Str::of(Carbon::now()->millisecond() . $request->id)->pipe('md5') . $request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path('assets/site/images/users'), $imageName); // move the new img 
        $validate['img'] = $imageName;
        User::create($validate);
        return redirect()->route('login');
    }
}
