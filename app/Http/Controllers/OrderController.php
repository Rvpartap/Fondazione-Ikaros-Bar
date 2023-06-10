<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
use Eastwest\Json\Facades\Json;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function __construct()
    {
    	  #cambiamo da guest a auth aggiungendo role per permettere l'accesso solo agli admin
        #$this->middleware('guest');
        $this->middleware('auth');
        #$this->middleware('role');
    }

    public function index()
    {
    	  $today = date("y-m-d");
        #$orders = Order::all();
        $orders = Order::where('data', '=', $today)->get();
        return view('order', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$response = json_decode($request->getContent(), true) ;
    	foreach($response as $id => $datiOrdine){
        $esitorders = Order::create($datiOrdine);
      }
      $request->session()->forget('cart');
		return redirect('/order')->with('status', 'Orders successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'conferma' => 'required|max:255',
        ]);
       
  		  $ordini = Order::where('id', $id)->update($updateData);
		  return redirect('/order')->with('status', 'Order has been confirmed successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = Order::findOrFail($id);
        $orders->delete();
        return redirect('/order')->with('status', 'Order successfully deleted!');
    }
}
