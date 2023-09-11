<?php

namespace App\Http\Controllers;

use App\Models\Referrals;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReferralsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $referrals = Referrals::paginate(5);
        return response()->json(['users' => $referrals]);
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
            'hcGGGID' => ['required', 'string', 'max:255'],
            'philhealth_id' => ['required', 'string', 'max:255'],
            'philhealth_cat' => ['required', 'string', 'max:255'],
            'reasonForReferral' => ['required', 'string', 'max:255'],
            'valid_until' => ['required'],
            'issuing_officer_id' => ['required'],

        ]);

        Referrals::create([
            'resident_id' => $request->resident_id,
            'hcGGGID' => $request->hcGGGID,
            'philhealth_id' => $request->philhealth_id,
            'philhealth_cat' => $request->philhealth_cat,
            'reasonForReferral' => $request->reasonForReferral,
            'valid_until' => $request->valid_until,
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
