<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawans = Karyawan::get();
        return view('leads', compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leads_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $karyawans = new karyawan();
        $karyawans->branch_Office = $request->branch_Office;
        $karyawans->full_name = $request->full_name;
        $karyawans->address = $request->address;
        $karyawans->email = $request->email;
        $karyawans->phone = $request->phone;
        $karyawans->status = $request->status;
        $karyawans->probability = $request->probability;
        $karyawans->lead_type = $request->lead_type;
        $karyawans->lead_channel = $request->lead_channel;
        $karyawans->lead_number = $request->lead_number;
        $karyawans->lead_media = $request->lead_media;
        $karyawans->lead_source = $request->lead_source;
        $karyawans->save();

        return redirect()->route('leads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $karyawans = Karyawan::find($id);
        return view('leads_detail', compact('karyawans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $karyawans = Karyawan::find($id);
        return view('leads_edit', compact('karyawans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $karyawans = Karyawan::find($id);
        $karyawans->branch_Office = $request->branch_Office;
        $karyawans->full_name = $request->full_name;
        $karyawans->address = $request->address;
        $karyawans->email = $request->email;
        $karyawans->phone = $request->phone;
        $karyawans->status = $request->status;
        $karyawans->probability = $request->probability;
        $karyawans->lead_type = $request->lead_type;
        $karyawans->lead_channel = $request->lead_channel;
        $karyawans->lead_number = $request->lead_number;
        $karyawans->lead_media = $request->lead_media;
        $karyawans->lead_source = $request->lead_source;
        $karyawans->update();

        return redirect()->route('leads.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $karyawans = Karyawan::find($id);
        $karyawans->delete();
        return redirect()->route('leads.index');
    }
}
