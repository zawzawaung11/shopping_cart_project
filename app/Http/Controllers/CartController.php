<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

		$carditems = Cart::content();
		
		//dd($carditems);

		return view('front.cart_item',['data'=>$carditems]);
	
		
    }
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
		$product = Product::find($id);
		
		Cart::add($id, $product->name, 1, $product->price);
		
		return redirect('/');
		
		
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        //
		
		$qty = $request->qty;
		Cart::update($rowId, $qty);
		return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        //
		Cart::remove($rowId);
		
		return redirect()->back();
		
		
		
    }
}
