<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Transactions;

class CreditController extends Controller
{

    public function index(Request $request, $email = null){


        if($email && !Auth::hasRole('members-admin')) {
            abort(403, 'Access denied');
        }
        if(!$email) $email = Auth::id();
        $user = $this->getProfile($email);


        /* TODO 
	     * user_id hardcoded!!!!!!
         */


        $user->user_id = 704;

    	$credit = $this->getCredit($user->user_id);
    	$user->credit = $credit;

        return view('users/credit', ['user' => $user]);
    }

    /* 
     * Top-up user's credit 
     */
    public function topup(Request $request){
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
	    	
	    	return view('users/credit', ['is_success'=> true]);
    	} else {
    		// kill
            abort(500, 'Error');
    	}

    }
    
    /*
     * Create new transaction (negative or positive)
     */
    public function addTransaction(Request $request){
    	// Get transaction amount
    	// Check if user can go negative
    	// Add transaction
    	// Return
    }

    /*
     * Get user's total credit
     */
    private function getCredit($user_id){
    	$amount = Transactions::where('user_id', $user_id)->sum("amount");
    	return $amount;
    }


}
