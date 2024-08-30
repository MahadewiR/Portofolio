@extends('layouts.app')
@section('title', 'Tambah Skills')
@section('content')

    <form action="{{ route('skills.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_skills">Name Skills</label>
            <input type="text" name="nama_skills" id="nama_skills" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama_skills">Category Skills</label>
            <select name="category_skill" id="" class="form-control" required>
                <option value="">Category</option>
                <option value="Hard Skill">Hard Skill</option>
                <option value="Soft Skill">Soft Skill</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="precentage">Precentage</label>
            <input type="number" name="precentage" id="precentage" class="form-control" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary">ADD</button>
            <a href="{{ url('skills') }}" class="btn btn-outline-danger">Back</a>
        </div>
    </form>

@endsection
