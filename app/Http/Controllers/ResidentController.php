<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $residents = Resident::orderBy('nik', 'asc')->get();

        return response()->json([
            'status' => 'success',
            'data' => $residents
        ]);
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
        $validated = $request->validate([
            'nama' => ['required', 'string'],
            'nik' => ['required', 'string', 'unique:residents,nik', 'digits:16'],
            'alamat' => ['required', 'string'],
            'pekerjaan' => ['required', 'string']
        ]);

        if ($validated) {
            $resident = Resident::create([
                'id' => Uuid::uuid4()->toString(),
                'nama' => $validated['nama'],
                'nik' => $validated['nik'],
                'alamat' => $validated['alamat'],
                'pekerjaan' => $validated['pekerjaan']
            ]);

            return response()->json([
                'status' => 'success',
                'data' => $resident
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Resident $resident)
    {
        return response()->json([
            'status' => 'success',
            'data' => $resident
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resident $resident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resident $resident)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string'],
            'nik' => ['required', 'string', 'unique:residents,nik', 'digits:16'],
            'alamat' => ['required', 'string'],
            'pekerjaan' => ['required', 'string']
        ]);

        if ($validated) {
            $resident->update([
                'nama' => $validated['nama'],
                'nik' => $validated['nik'],
                'alamat' => $validated['alamat'],
                'pekerjaan' => $validated['pekerjaan']
            ]);

            return response()->json([
                'status' => 'success',
                'data' => $resident
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resident $resident)
    {
        if ($resident->delete()) {
            return response()->json([
                'status' => 'success'
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }
}
