<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Container\TClass|static
     */
    public function index(Request $request) {
        $chartData = Record::getRecordsLastXDays(7);

        return view('dashboard', compact('chartData'));
    }
}
