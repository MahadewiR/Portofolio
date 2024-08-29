@extends('layouts.app')
@section('title', 'Profile')

@section('content')
    <div class="card">
        <div class="card-header bg-secondary text-white">Profiles</div>
        <div class="card-body">
            <a href="{{ route('profile.create') }}" class="btn btn-outline-primary mb-2">Add</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No Tlp</th>
                            <th>Tentang</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($profile as $pro)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pro->nama_lengkap }}</td>
                                <td>{{ $pro->email }}</td>
                                <td>{{ $pro->alamat }}</td>
                                <td>{{ $pro->no_tlp }}</td>
                                <td>{{ $pro->tentang }}</td>
                                <td><img width="100" src="{{ asset('storage/image/' . $pro->gambar) }}" alt=""></td>
                                <td class="justify-content-center"><a href="{{ route('profile.edit', $pro->id) }}"
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
