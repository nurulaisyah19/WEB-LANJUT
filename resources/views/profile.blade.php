@extends('layouts.app') {{-- Anggap Anda menggunakan layout bernama 'app' --}}

@section('content')
    <div class="container">
        <h1>Halaman Profil Pengguna</h1>

        <p>Selamat datang di halaman profil Anda. Di sini Anda bisa melihat dan mengedit data pribadi.</p>

        {{-- Contoh menampilkan data dari controller --}}
        @if(isset($user))
            <p>Nama Pengguna: <strong>{{ $user->name }}</strong></p>
            <p>Email: <strong>{{ $user->email }}</strong></p>
        @else
            <p>Data pengguna tidak ditemukan.</p>
        @endif
    </div>
@endsection