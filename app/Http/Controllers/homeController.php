<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class homeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function register(Request $request)
    {
        // $request ->validate([
        //     'email'=> 'required',
        //     'password'=> 'min:5',

        // ]);
        return 'Hello from reg page';
       
    }
}