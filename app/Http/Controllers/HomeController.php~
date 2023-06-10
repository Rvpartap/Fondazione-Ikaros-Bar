<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
    {
        return View('home');
    }
    
    /*
     *
     *   redirezione alle homes admin e user
     *
     */
      
    public function authenticationValidateAdmin(){
        if(auth()->user()->role_id == 1){
       		return view('adminHome');
        } else {
       		if(auth()->user()->role_id == 2) {
       	   	 $userHome= auth()->user()->name;
         	} else {
         		$userHome = "user";
         	}
       		print "$nomeuser non sei autorizzato!<br>";
       		print '<div><a href= "/' . $userHome . '/home">torna alla home</a></div>';
        }
	 }
	 
	 public function authenticationValidateBarAdmin(){
        if(auth()->user()->role_id == 2 ){ 
       		return view('baradminHome');
        }
        elseif(auth()->user()->role_id == 1) {
       	   $userHome= auth()->user()->name;
        } else {             	
       		print "$nomeuser non sei autorizzato!";
       		print '<div><a a href= "/' . $userHome . '/home">torna alla home</a></div>';
        } 
	 }
	 
	 public function authenticationValidateDeveloper(){
        if(auth()->user()->role_id == 1){
       		return view('test');
        } else {
       		if(auth()->user()->role_id == 2) {
       	   	 $userHome= auth()->user()->name;
        		}else {
        			$userHome = "Dev";
        		}
       		print "$nomeuser non sei autorizzato!<br>";
       		print '<div><a href= "/' . $userHome . '/home">torna alla home</a></div>';
       	}
	 }

	 public function authenticationValidateUser(){
        return view('userHome');
	 }
}


