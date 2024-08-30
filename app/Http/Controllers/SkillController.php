<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Skill::create([
            'nama_skills' => $request->nama_skills,
            'category_skill' => $request->category_skill,
            'precentage' => $request->precentage,
        ]);
        return redirect()->route('skills.index')->with('success', 'Data Skills Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Skill::findOrFail($id);
        return view('skills.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skills = Skill::findOrFail($id);
        $request->validate([
            'nama_skills' => 'required|string|max:55',
            'category_skill' => 'required|string|max:55',
            'precentage' => 'required|string|max:250',
        ]);

        $skills->nama_skills = $request->nama_skills;
        $skills->category_skill = $request->category_skill;
        $skills->precentage = $request->precentage;
        $skills->save();

        return redirect()->route('skills.index')->with('success', 'Update Skills Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
