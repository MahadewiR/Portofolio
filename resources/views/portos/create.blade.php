@extends('layouts.app')

@section('title', 'Tambah Portofolio')

@section('content')
<form action="{{ route('portos.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="picture">Photo</label>
        <input type="file" name="gambar" id="gambar" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">ADD</button>
        <a href="{{ url('portos') }}" class="btn btn-danger">Back</a>
    </div>
</form>
@endsection