<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CreditController extends Controller
{

    public function index(Request $request, $email = null){

        if($email && !Auth::hasRole('members-admin')) {
            abort(403, 'Access denied');
        }
        if(!$email) $email = Auth::id();
        $user = $this->getProfile($email);

        return view('users/credit', ['user' => $user]);
    }

    public function reload(Request $request){
    	//dd($request);
    	$amount = +$request->get('amount');
    	
    	if($amount > 0 && $amount <= 20){
	    	$paymentMethod = $request->get('payment_method');
	    	
	    	// Filter paymentMethods to prevent manual injection
	    	if ($paymentMethod == "SEPA" || 
				$paymentMethod == "cash" || 
				$paymentMethod == "QR" || 
				$paymentMethod == "sumup") {

	    		// Add a transaction line to the database


	    	} else {
            	abort(500, 'Error');	
	    	}
	    	
	    	return view('users/credit', ['is_reloaded'=>$isReloaded]);
    	} else {
    		// kill
            abort(500, 'Error');
    	}

    }
}
