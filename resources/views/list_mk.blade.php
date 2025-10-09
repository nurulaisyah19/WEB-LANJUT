@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">{{ $title }}</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">+ Tambah Mata Kuliah</a>

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mks as $mk)
            <tr>
                <td>{{ $mk->id }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
