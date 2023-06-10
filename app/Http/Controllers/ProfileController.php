<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


	
	
class ProfileController extends Controller
{
    
    public function __construct()
    {
    	 
        #$this->middleware('guest');
        $this->middleware('auth');
        #$this->middleware('role');
    }
    
    public function index()
    {
       return view('indexprofile');
    }
    
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
        		'name' => 'max:255',
            'email' => 'max:255',
            'classe' => 'max:255',
            'password' => 'max:255',
        ]);
        
        
        User::whereId($id)->update($updateData);
        return redirect('/profile')->with('completed', 'Account aggiornato con successo!');
    }

}
