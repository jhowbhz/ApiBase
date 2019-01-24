<?php

namespace App\Http\Middleware;
use Closure;
use App\Models\User;

class APIKey{

    public function handle($request, Closure $next){

        if($request->token_api == ''){
            $response = ['mensagem'=> 'no token'];
            return response()->json($response);
        }else{

            $users = User::where('token_api', $request->token_api)->count();
            if($users != 1){
                $response = ['mensagem'=> 'usuário não autenticado'];
                return response()->json($response);
            }else{
                return $next($request);
            }
        }
    }

}
