<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Mon super titre';
        $title2 = 'Mon super second titre';

        return view('articles',[
            'title' => $title,
            'title2' => $title2
        ]);

    }
}
