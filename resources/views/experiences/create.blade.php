@extends('layouts.app')
@section('title', 'Tambah Experiences')

@section('content')
    <form action="{{ route('experiences.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_perusahaan">Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control">
        </div>
        <div class="mb-3">
            <label for="posisi">Posisi</label>
            <input type="text" name="posisi" id="posisi" class="form-control">
        </div>
        <div class="mb-3">
            <label for="lama_kerja">Lama Kerja</label>
            <input type="text" name="lama_kerja" id="lama_kerja" class="form-control">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary">ADD</button>
            <a href="{{ url('experiences') }}" class="btn btn-outline-danger">Back</a>
        </div>
    </form>
@endsection
