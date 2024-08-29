@extends('layouts.app')
@section('title', 'Tambah Profile')
@section('content')
    <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="picture">Photo</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nama_lengkap">Nama</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="no_telpon">No Tlp</label>
            <input type="number" name="no_tlp" id="no_tlp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="descriptions">Tentang Saya</label>
            <textarea name="tentang" id="tentang" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="instagram">Instagram</label>
            <input type="url" name="instagram" id="instagram" class="form-control" placeholder="https://example.com">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary">ADD</button>
            <a href="{{ url('admin/profile') }}" class="btn btn-outline-danger">Back</a>
        </div>
    </form>

@endsection
