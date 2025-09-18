<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $chartData = Record::getRecordsLastXDays(7);

        return view('dashboard', compact('chartData'));
    }
}
