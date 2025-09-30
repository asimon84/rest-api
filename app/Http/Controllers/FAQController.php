<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Container\TClass|static
     */
    public function index(Request $request) {
        return view('faq',  ['items' => FAQ::getItems()]);
    }
}
