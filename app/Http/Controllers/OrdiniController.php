<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodotti;

class OrdiniController extends Controller
{
	
	//la funzione construct definisce il metodo di autenticazione che protegge la route
	public function __construct()
    {
    	  #guest:tutti, auth:tutti gli autenticati, role: solo gli admin
        #$this->middleware('guest');
        $this->middleware('auth');
        #$this->middleware('role');
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodotti = Prodotti::all();
        return view('indexordini', compact('prodotti'));
    }

    /**
     * carrello
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $prodotti = Prodotti::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nome" => $prodotti->nome_prod,
                "quantity" => 1,
                "prezzo" => $prodotti->prezzo,
                "image" => $prodotti->url_img
            ];
        }
          
        session()->put('cart', $cart);
        
        return redirect('/ordini')->with('success', 'Prodotto aggiunto con successo!');
    }


    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Carrello aggiornato con successo!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Prodotto rimosso con successo!');
        }
    }
    public function checkout(Request $request)
    {
        $sessionCart = $request->session()->get('cart');
        #if(!$sessionCart || count($sessionCart['id']) === 0) {
        	if(!$sessionCart ) { 
            return redirect()->route('cart');
        }
        return view('checkout',[
            'title' => 'Checkout | PHP E-commerce'
        ]);
    }
}