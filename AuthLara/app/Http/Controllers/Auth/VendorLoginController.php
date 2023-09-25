<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:vendor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('vendor.login');
    }

    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        // Attempt to log the user in
        if(Auth::guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password, 'state' => 'accept'], $request->remember))
        {
            return redirect()->route('vendor.dashboard');
        }

        // if unsuccessful
        //return redirect()->back()->withInput($request->only('email','remember'));
        $vendor = Vendor::where('email', $request->email)->where('state','pending')->where('real_password', $request->password)->count();
        if($vendor > 0)
        {
            return redirect()->back()->with('error', 'هذا الحساب غير مفعل');
        }
        else{
            return redirect()->back()->with('error', 'البريد الالكتروني او كلمة المرور غير صحيحة');
        }
    }
}
