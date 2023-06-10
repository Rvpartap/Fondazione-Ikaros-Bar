<?php

namespace App\Http\Controllers;
use App\Prodotti;
use Illuminate\Http\Request;
Use Illuminate\Database\QueryException;

class ProdottiController extends Controller
{
    public function __construct()
    {
    	  #cambiamo da guest a auth aggiungendo role per permettere l'accesso solo agli admin
        #$this->middleware('guest');
        $this->middleware('auth');
        $this->middleware('role');
    }
    
    public function index()
    {
        $prodotti = Prodotti::all();
        return view('indexprod', compact('prodotti'));
    }

    
    public function create()
    {
        return view('createprod');
    }

    
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'nome_prod' => 'required|max:255',
            'url_img' => 'required|max:255',
            'prezzo' => 'required|numeric',
            
        ]);
        $prodotti = Prodotti::create($storeData);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $prodotti = Prodotti::findOrFail($id);
        return view('editprod', compact('prodotti'));
    }

    
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'nome_prod' => 'required|max:255',
            'url_img' => 'required|max:255',
            'prezzo' => 'required|max:255',
            'active' => 'required|max:255',
        ]);
       
  		  $prodotti = Prodotti::where('id', $id)->update($updateData);
        return redirect('/prodotti')->with('completed', 'Product has been updated!');
    }

    
    public function destroy($id)
    {
        $prodotti = Prodotti::findOrFail($id);
        $prodotti->delete();
        return redirect('/prodotti')->with('completed', 'Product has been deleted!');
    }
}