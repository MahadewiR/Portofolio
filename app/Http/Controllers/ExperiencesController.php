<?php

namespace App\Http\Controllers;

use App\Models\Experiences;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exp = Experiences::all();
        return view('experiences.index', compact('exp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_perusahaan' => 'required|nullable|string',
            'posisi' => 'required|nullable|string',
            'lama_kerja' => 'required|nullable|string',
            'deskripsi' => 'required|nullable|string'

        ]);

        Experiences::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'posisi' => $request->posisi,
            'lama_kerja' => $request->lama_kerja,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('experiences.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experiences $experiences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $exp = Experiences::findOrFail($id);
        return view('experiences.edit', compact('exp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $exp = Experiences::findOrFail($id);
        $request->validate([
            'nama_perusahaan' => 'required|string|max:55',
            'posisi' => 'required|string|max:55',
            'lama_kerja' => 'required|string|max:250',
            'deskripsi' => 'required|string|max:250',
        ]);

        $exp->nama_perusahaan = $request->nama_perusahaan;
        $exp->posisi = $request->posisi;
        $exp->lama_kerja = $request->lama_kerja;
        $exp->deskripsi = $request->deskripsi;
        $exp->save();

        return redirect()->route('experiences.index')->with('success', 'Update Profile Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experiences $experiences)
    {
        //
    }
}
