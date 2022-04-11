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


}
