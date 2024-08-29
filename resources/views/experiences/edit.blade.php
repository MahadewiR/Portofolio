@extends('layouts.app')
@section('title', 'Edit Experiences')
@section('content')
    <form action="{{ route('experiences.update', $exp->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_perusahaan">Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control"
                value="{{ $exp->nama_perusahaan }}">
        </div>
        <div class="mb-3">
            <label for="posisi">Posisi</label>
            <input type="text" name="posisi" id="posisi" class="form-control" value="{{ $exp->posisi }}">
        </div>
        <div class="mb-3">
            <label for="lama_kerja">Lama Kerja</label>
            <input type="text" name="lama_kerja" id="lama_kerja" class="form-control" value="{{ $exp->lama_kerja }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $exp->deskripsi }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary">ADD</button>
            <a href="{{ url('experiences') }}" class="btn btn-outline-danger">Back</a>
        </div>
    </form>

@endsection
