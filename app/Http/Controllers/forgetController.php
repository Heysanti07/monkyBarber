<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgetController extends Controller
{
    public function forget() {
        return view('auths.forgets');
    }
}
