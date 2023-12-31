<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
#aggiunta per gestione request
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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    #gestione login con ruoli
        public function login(Request $request){

        $fieldData = $request->all();

        #$this->validate([
        #    'email' => 'required|email',
        #    'password' => 'required',
        #]);

        if(auth()->attempt(array('email' => $fieldData['email'], 'password' => $fieldData['password']))){
            if(auth()->user()->role_id == 1){
                return redirect()->route('admin.route');
            } elseif(auth()->user()->role_id ==2){
                return redirect()->route('baradmin.route');
            } elseif(auth()->user()->role_id == 0){
                return redirect()->route('user.route');
            } else {
                return redirect()->route('home');
            }

        } else {
            return redirect()->route('login')->with('error','Hai inserito dati sbagliati!');
        }

    }    
    
    

    
}