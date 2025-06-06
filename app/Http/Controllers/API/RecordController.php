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
        $records = Record::all();

        $success = (!empty($records)) ? true : false;
        $message = ($success) ? 'Records retrieved successfully.' : 'Task failed. Records not found.';

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
        $record = new Record([
            'string' => 'test string',
            'text' => 'test text',
            'json' => '{}',
            'boolean' => true,
            'integer' => 10,
            'float' => 9.99
        ]);

        $success = (!empty($record)) ? true : false;
        $message = ($success) ? 'Record created successfully.' : 'Task failed. Record not found.';

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
        $record = Record::find($id);

        $success = (!empty($record)) ? true : false;
        $message = ($success) ? 'Record retrieved successfully.' : 'Task failed. Record not found.';

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
        $record = Record::find($id);

        $record->string = $request->get('string', $record->string);
        $record->text = $request->get('text', $record->text);
        $record->json = $request->get('json', $record->json);
        $record->boolean = $request->get('boolean', $record->boolean);
        $record->integer = $request->get('integer', $record->integer);
        $record->float = $request->get('float', $record->float);

        $success = ($record->save()) ? true : false;
        $message = ($success) ? 'Record updated successfully.' : 'Task failed. Record not updated.';

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
        $success = (!empty(Record::destroy($id))) ? true : false;
        $message = ($success) ? 'Record deleted successfully.' : 'Task failed. Record not deleted.';

        return response()->json([
            'success' => $success,
            'message' => $message
        ]);
    }
}
