<?php

namespace App\Http\Controllers;

use App\Models\Indigencies;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndigenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $indigencies = Indigencies::paginate(5);
        return response()->json(['indigencies' => $indigencies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'resident_id' => ['required', 'string', 'max:255'],
            'reason' => ['required', 'string', 'max:255'],
            'valid_until' => ['required'],
            'birth_date' => ['required'],
            'remarks' => ['required'],
            'issuing_officer_id' => ['required'],

        ]);

        Indigencies::create([
            'resident_id' => $request->resident_id,
            'reason' => $request->reason,
            'valid_until' => $request->valid_until,
            'birth_date' => $request->birth_date,
            'remarks' => $request->remarks,
            'issuing_officer_id' => $request->issuing_officer_id,

        ]);
        // dd($request);
        return response()->noContent();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
