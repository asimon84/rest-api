<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $chartData = Record::getRecordsByDays(6);

//        $chartData = [
//            ['data1', 30, 200, 100, 400, 150, 250],
//            ['data2', 50, 20, 10, 40, 15, 25]
//        ];

        return view('dashboard', compact('chartData'));
    }
}
