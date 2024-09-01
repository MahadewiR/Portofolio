@extends('layouts.app')
@section('title', 'Edit Skills')

@section('content')
    <form action="{{ route('skills.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_skills">Name Skills</label>
            <input type="text" name="nama_skills" id="nama_skills" class="form-control" value="{{ $data->nama_skills }}">
        </div>
        <div class="mb-3">
            <label for="category_skills">category_skills</label>
            <input type="text" name="category_skill" id="category_skill" class="form-control"
                value="{{ $data->category_skill }}">
        </div>
        <div class="mb-3">
            <label for="precentage">Precentage</label>
            <input type="number" name="precentage" id="precentage" class="form-control" value="{{ $data->precentage }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary">ADD</button>
            <a href="{{ url('skills') }}" class="btn btn-outline-danger">Back</a>
        </div>
    </form>
@endsection
