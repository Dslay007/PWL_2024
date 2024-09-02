<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
public function kategoriFood(){ 
        return view('pos.food') ;
    } 
    
    public function kategoriBeauty(){ 
        return view('pos.beauty') ;
    } 

    public function kategoriCare(){ 
        return view('pos.homeCare') ;
    } 
    public function kategoriBaby(){ 
        return view('pos.baby') ;
    } 
}