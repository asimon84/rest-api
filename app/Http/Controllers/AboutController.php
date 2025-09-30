<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * @return \Illuminate\Container\TClass|static
     */
    public function index(Request $request) {
        return view('about',  []);
    }
}
