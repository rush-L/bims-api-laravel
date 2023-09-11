<?php

namespace App\Http\Controllers;

use App\Models\Clearance;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $clearance = Clearance::paginate(5);
        return response()->json(['users' => $clearance]);
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
            'purpose' => ['required', 'string', 'max:255'],
            'valid_until' => ['required'],
            'remarks' => ['required'],
            'issuing_officer_id' => ['required'],

        ]);

        Clearance::create([
            'resident_id' => $request->resident_id,
            'purpose' => $request->purpose,
            'valid_until' => $request->valid_until,
            'remarks' => $request->remarks,
            'issuing_officer_id' => $request->issuing_officeer_id,

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
