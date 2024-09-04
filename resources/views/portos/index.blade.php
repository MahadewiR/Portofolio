@extends('layouts.app')
@section('title', 'Portofolio')

@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{ route('portos.create') }}" class="btn btn-outline-primary mb-2">Add</a>
        <div class="table table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($portos as $p)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img width="100" src="{{ asset('storage/image/' . $p->gambar) }}" alt=""></td>
                            <td>{{ $p->judul }}</td>
                            <td>{{ $p->deskripsi }}</td>
                            <td class="justify-content-center"><a href="{{ route('portos.edit', $p->id) }}"
                                    class="btn btn-success btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
    </div>
</div>
@endsection