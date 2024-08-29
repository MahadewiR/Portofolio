@extends('layouts.app')
@section('title', 'Education')
@section('content')
    <div class="card">
        <div class="card-header bg-secondary text-white">Education</div>
        <div class="card-body">
            <a href="{{ route('education.create') }}" class="btn btn-outline-primary mb-2">Add</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Sekolah</th>
                            <th>Jurusan</th>
                            <th>Tahun Lulus</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($education as $edu)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $edu->nama_sekolah }}</td>
                                <td>{{ $edu->jurusan }}</td>
                                <td>{{ $edu->tahun_lulus }}</td>
                                <td class="justify-content-center"><a href="{{ route('education.edit', $edu->id) }}"
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
