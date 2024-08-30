@extends('layouts.app')
@section('title', 'Skills')
@section('content')

    <div class="card">
        <div class="card-body">
            <a href="{{ route('skills.create') }}" class="btn btn-outline-primary mb-2">Add</a>
            <div class="table table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name Skills</th>
                            <th>Category Skills</th>
                            <th>Precentage</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($skills as $skill)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $skill->nama_skills }}</td>
                                <td>{{ $skill->category_skill }}</td>
                                <td>{{ $skill->precentage }}</td>
                                <td class="justify-content-center"><a href="{{ route('skills.edit', $skill->id) }}"
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
