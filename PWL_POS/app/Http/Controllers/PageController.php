<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() { 
        return ''; 
} 
public function about() { 
    return 'NAMA : MOHAMAD DONA HARYANTO<br>NIM : 2241760127'; 
} 
public function articles($ID) { 
    return 'Halaman Artikel dengan Id '.$ID; 
} 

}
