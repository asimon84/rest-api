<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $success = true;
        $message = 'TEST';
        $records = Record::all();

        return response()->json([
            'success' => $success,
            'message' => $message,
            'records' => $records
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $success = true;
        $message = 'TEST';

        $record   = [
            'string' => 'test'
        ];

        return response()->json([
            'success' => $success,
            'message' => $message,
            'record' => $record
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $success = true;
        $message = 'TEST';
        $record = Record::find($id);

        return response()->json([
            'success' => $success,
            'message' => $message,
            'record' => $record
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $success = true;
        $message = 'TEST';
        $record = Record::find($id);

        $record->string = 'test';

        return response()->json([
            'success' => $success,
            'message' => $message,
            'record' => $record
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $success = true;
        $message = 'TEST';
        $record = Record::destroy($id);

        return response()->json([
            'success' => $success,
            'message' => $message
        ]);
    }
}
