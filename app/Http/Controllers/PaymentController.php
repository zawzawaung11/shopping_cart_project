<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Stripe;
use App\Models\Yes;

use Cart;

class PaymentController extends Controller
{
    //
	public function index(){
		
		return view('payment.index');
		
	}
		
		public function makepay(Request $request){
		
		
		$token = $request->stripeToken;
		
		Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment" 
        ]);
  
        Session::flash('success', 'Payment successful!');
		
		Cart::destroy();
          
        return redirect('/');
		
	}
	
}
