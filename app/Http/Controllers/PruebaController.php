<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PruebaController extends Controller
{
    public function select(){
        $user = User::select('id', 'name')->first();
		if($user != null ){
            return sprintf("Hola bebe: %s, %s", config("app.name"), $user->name);
        }else{
            return sprintf("Hola bebe: %s", config("app.name"));
        }
	}
    
    public function index(){
		if(env("APP_ENV") == "local"){
			return "local";
		}
		if(env("APP_DEBUG")){
			return "debug";
		}
		return sprintf("Hola bebe: %s", config("app.name"));
	}
}
