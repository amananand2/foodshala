<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Restaurant;
use App\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
            $this->middleware('guest')->except('getLogout');
            $this->middleware('guest:restaurant')->except('getLogout');
            $this->middleware('guest:customer')->except('getLogout');
    }

    public function showRestaurantLoginForm()
    {
        return view('auth.login', ['url' => 'restaurant']);
    }

    public function restaurantLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('restaurant')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $customer_name = Auth::user('Restaurant_name');
            return redirect()->intended('/restaurant')->with('name',$customer_name);
        }
        return back()->withInput($request->only('email', 'remember'));
    }

     public function showCustomerLoginForm()
    {
        return view('auth.login', ['url' => 'customer']);
    }

    public function customerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            $customer_name = Auth::user('Customer_name');
            return redirect()->intended('/customer')->with('name',$customer_name);
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    

    
}