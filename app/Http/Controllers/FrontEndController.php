<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function index(){

        return view('frontend.index');

    }

    function teste($request){
        dd($request);
        return view('frontend.teste');

    }

}
