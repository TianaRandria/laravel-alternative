<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    
        return view('pages.front-page');
 
    }
    
    public function product()
    {
    
        return view('pages.product');
 
    }
    public function single()
    {
    
        return view('pages.single');
 
    }
    
    
    
   
}
