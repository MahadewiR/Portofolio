<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::all();
        return view('profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_lengkap' => 'required|string|max:55',
            'email' => 'required|string|email|max:55',
            'alamat' => 'required|string|max:250',
            'no_tlp' => 'required|string|max:15',
            'tentang' => 'nullable|string',
            'instagram' => 'nullable|url',

        ]);

        //Menghanddle file upload-an:
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path); //menyimpan nama filenya saja

        }
        // Insert into profiles () values():
        Profile::create([
            'gambar' => $name,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email,
            'tentang' => $request->tentang,
            'instagram' => $request->instagram,

        ]);
        return redirect()->route('profile.index')->with('success', 'Data Berhasil Ditambahkan');
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

        $data = Profile::findOrFail($id);
        return view('profile.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profile = Profile::findOrFail($id);
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_lengkap' => 'required|string|max:55',
            'email' => 'required|string|email|max:55',
            'alamat' => 'required|string|max:250',
            'no_tlp' => 'required|string|max:15',
            'tentang' => 'nullable|string',
            'instagram' => 'nullable|url',

        ]);
        // Simpan gambar jika ada di upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada:
            if ($profile->gambar) {
                Storage::delete('public/image/' . $profile->gambar);
            }
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path);
            $profile->gambar = $name;
        }
        $profile->nama_lengkap = $request->nama_lengkap;
        $profile->alamat = $request->alamat;
        $profile->no_tlp = $request->no_tlp;
        $profile->email = $request->email;
        $profile->instagram = $request->instagram;
        $profile->tentang = $request->tentang;
        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Update Profile Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
