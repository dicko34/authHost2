<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers , VerifiesEmails;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
        
    }
    public function showLoginForm()
    {
        return view('vendor.login');
    }

    public function login(Request $request)
    {
        // Validate form data
        {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
     
            if (Auth::guard('user')->attempt($credentials)) { 
                if ($request->user()->hasVerifiedEmail()) {
                    return $request->wantsJson()
                                ? new JsonResponse([], 204)
                                : redirect($this->redirectPath());
                }
        
                $request->user()->sendEmailVerificationNotification();
        
                return $request->wantsJson()
                            ? new JsonResponse([], 202)
                            : route('verification.notice', ['sent' => true]);
            }
     
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }
    
}
