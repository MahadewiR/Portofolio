@extends('layouts.app')
@section('tilte', 'Experinces')

@section('content')
    <div class="card">
        <div class="card-header bg-secondary text-white">Experience</div>
        <div class="card-body">
            <a href="{{ route('experiences.create') }}" class="btn btn-outline-primary mb-2">Add</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perusahaan</th>
                            <th>Posisi</th>
                            <th>Lama kerja</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($exp as $e)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $e->nama_perusahaan }}</td>
                                <td>{{ $e->posisi }}</td>
                                <td>{{ $e->lama_kerja }}</td>
                                <td>{{ $e->deskripsi }}</td>
                                <td class="justify-content-center"><a href="{{ route('experiences.edit', $e->id) }}"
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
