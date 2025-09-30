<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RecordController extends Controller
{
    public function index(Request $request) {
        return DataTables::of(Record::all())
            ->addIndexColumn()
            ->addColumn('action', function($row){
                return '<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-search"></i></button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
