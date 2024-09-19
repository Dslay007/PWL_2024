<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($ID) { 
        return 'Halaman Artikel dengan Id '.$ID; 
    } 
}
