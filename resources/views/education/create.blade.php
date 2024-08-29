@extends('layouts.app')
@section('title', 'Tambah Edukasi')

@section('content')
    <form action="{{ route('education.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tahun_lulus">Tahun Lulus</label>
            <input type="number" name="tahun_lulus" id="tahun_lulus" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary">ADD</button>
            <a href="{{ url('education') }}" class="btn btn-outline-danger">Back</a>
        </div>
    </form>

@endsection
