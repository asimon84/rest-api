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

                $btn = '<button type="button" class="btn btn-info">View</button>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
