<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function user(){ 
        return view('pos.user') 
            ->with('id','2241760127')
            ->with('name','Dona') ;
    } 
}