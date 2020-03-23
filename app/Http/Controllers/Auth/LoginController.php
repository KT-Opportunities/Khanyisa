<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function index()
    {
     return view('welcome');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
           ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

    //   dd($request->get('password'));
    //   dd($request->get('email'));

     if(Auth::attempt($user_data))
     {
      return redirect('successlogin');
     }
     else
     {
       return back()->with('error', 'Wrong Login Details');
    //   return redirect('successlogin');
     }

    }

    function successlogin()
    {
     return view('home');
    }

    function logout()
    {
     Auth::logout();
     return redirect('welcome');
    }
}
