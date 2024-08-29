@extends('layouts.app')
@section('title', 'Edit Profile')
@section('content')

    <form action="{{ route('profile.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="picture">Photo</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
            <img src="{{ asset('storage/image/' . $data->gambar) }}" width="150" height="170" alt="">
        </div>
        <div class="mb-3">
            <label for="nama_lengkap">Nama</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                value="{{ $data->nama_lengkap }}">
        </div>
        <div class="mb-3">
            <label for="no_telpon">No Telp</label>
            <input type="number" name="no_tlp" id="no_tlp" class="form-control" value="{{ $data->no_tlp }}">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $data->email }}">
        </div>
        <div class="mb-3">
            <label for="descriptions">Tentang Saya</label>
            <textarea name="tentang" id="tentang" class="form-control" cols="30" rows="10">{{ $data->tentang }}</textarea>
        </div>
        <div class="mb-3">
            <label for="instagram">Instagram</label>
            <input type="url" name="instagram" id="instagram" class="form-control" placeholder="https://example.com"
                value="{{ $data->instagram }}">
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10">{{ $data->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary">ADD</button>
            <a href="{{ url('profile') }}" class="btn btn-outline-danger">Back</a>
        </div>
    </form>
@endsection
