<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller{

    function index(){

        $teste = [ 'mensagem' => 'index'];
        return response()->json($teste);

    }

    function postQuestion(Request $request){

        $teste = [ 'mensagem' => 'post', 'data' => $request->all() ];

        return response()->json($teste);
    }

}
