@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">{{ $title }}</h2>

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" id="nama_mk" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sks" class="form-label">Jumlah SKS</label>
            <input type="number" name="sks" id="sks" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
