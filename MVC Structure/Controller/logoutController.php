<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
	//*** index ***
    public function index(Request $req){

    	$req->session()->flush();
    	return redirect()->route('login.index');
    }
    //### index ###
}
