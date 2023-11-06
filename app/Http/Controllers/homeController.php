<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class homeController extends Controller
{
    /** 
    @return \Illuminate\Http\Response
    */
    public function index(){
        return view('register');
    }
    public function register(Request $request)
    {
        // $request ->validate([
        //     'email'=> 'required',
        //     'password'=> 'min:5',

        // ]);
        return $request;
       
    }
}