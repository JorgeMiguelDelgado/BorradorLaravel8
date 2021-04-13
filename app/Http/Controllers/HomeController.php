<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');

    }

    public function create()
    {
        return view('home.create');
    }

    public function show($curso)
    {
        return view('home.show',compact('curso'));
    }
}
