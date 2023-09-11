<?php

namespace App\Http\Controllers;

use App\Models\Residents;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class ResidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $residents = Residents::all();
        return response()->json($residents);
        //
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
    public function store(Request $request): Response
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required'],
            'birth_date' => ['required'],
            'birth_place' => ['required'],
            'gender' => ['required'],
            'civil_status' => ['required'],
            'contact_number' => ['required'],
            'guardian_name' => ['required'],
            'guardian_contact_number' => ['required'],
            'religion' => ['required'],
            'occupation' => ['required'],
            'issuing_officer_id' => ['required'],
        ]);

        Residents::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'birth_place' => $request->birth_place,
            'gender' => $request->gender,
            'civil_status' => $request->civil_status,
            'contact_number' => $request->contact_number,
            'guardian_name' => $request->guardian_name,
            'guardian_contact_number' => $request->guardian_contact_number,
            'religion' => $request->religion,
            'occupation' => $request->occupation,
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
