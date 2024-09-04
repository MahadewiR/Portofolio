@extends('layouts.app')
@section('title', 'Edit Portofolio')

@section('content')
<form action="{{ route('portos.update', $portos->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="picture">Photo</label>
        <input type="file" name="gambar" id="gambar" class="form-control">
        <img src="{{ asset('storage/image/' . $portos->gambar) }}" width="150" height="170" alt="">
    </div>
    <div class="mb-3">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" class="form-control"
            value="{{ $portos->judul }}">
    </div>
    <div class="mb-3">
        <label for="descs">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $portos->deskripsi }}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-primary">ADD</button>
        <a href="{{ url('portos') }}" class="btn btn-outline-danger">Back</a>
    </div>
</form
@endsection