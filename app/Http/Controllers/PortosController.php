<?php

namespace App\Http\Controllers;

use App\Models\Portos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portos = Portos::all();
        return view('portos.index', compact('portos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:55',
            'deskripsi' => 'required|string|max:250',
        ]);

         //Menghanddle file upload-an:
         if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path); //menyimpan nama filenya saja

            Portos::create([
                'gambar' => $name,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->route('portos.index')->with('success', 'Data Porto Ditambahkan');
        }
    }

    // Implement the logic for these methods or remove them if not needed
    public function show(Portos $portos)
    {
        // ...
    }

    public function edit(string $id)
    {
        $portos = Portos::findOrFail($id);
        return view('portos.edit', compact('portos'));
    }

    public function update(Request $request, string $id)
    {
        $portos = portos::findOrFail($id);
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:55',
            'deskripsi' => 'required|string|email|max:55',

        ]);
        // Simpan gambar jika ada di upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada:
            if ($portos->gambar) {
                Storage::delete('public/image/' . $portos->gambar);
            }
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path);
            $portos->gambar = $name;
        }
        $portos->judul = $request->judul;
        $portos->eskripsi = $request->eskripsi;
        $portos->save();

        return redirect()->route('portos.index')->with('success', 'Update Porto Berhasil');
    }

    public function destroy(Portos $portos)
    {
        // ...
    }
}