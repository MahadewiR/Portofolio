<?php

namespace App\Http\Controllers;

use id;
use App\Models\Education;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Storage;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education = Education::all();
        return view('education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:55',
            'jurusan' => 'required|string|max:55',
            'tahun_lulus' => 'required|string|max:250',
        ]);

        Education::create([
            'nama_sekolah' => $request->nama_sekolah,
            'jurusan' => $request->jurusan,
            'tahun_lulus' => $request->tahun_lulus,
        ]);
        return redirect()->route('education.index')->with('success', 'Data Educate Ditambahkan');
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
        $data = Education::findOrFail($id);
        return view('education.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $education = Education::findOrFail($id);
        $request->validate([
            'nama_sekolah' => 'required|string|max:55',
            'jurusan' => 'required|string|max:55',
            'tahun_lulus' => 'required|string|max:250',
        ]);

        $education->nama_sekolah = $request->nama_sekolah;
        $education->jurusan = $request->jurusan;
        $education->tahun_lulus = $request->tahun_lulus;
        $education->save();

        return redirect()->route('education.index')->with('success', 'Update Profile Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
