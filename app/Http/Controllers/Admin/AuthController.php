<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function two_factor_recover(){
        return view("auth.two-factor-recovery");
    }
}
