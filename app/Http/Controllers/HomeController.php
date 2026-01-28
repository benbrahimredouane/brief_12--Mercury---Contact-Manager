<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index()
    {
        return view('home'); // we’ll create this view next
    }
}
