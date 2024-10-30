<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createAccountController extends Controller
{
    public function createAccounts() {
        
        return view('auths.createAccounts');
    }
}
