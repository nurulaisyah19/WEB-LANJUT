@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <div>
    <h2>{{ $title ?? 'Daftar Pengguna' }}</h2>
    <p class="text-muted">Menampilkan semua pengguna beserta kelasnya.</p>
  </div>
  <div>
    <a href="{{ route('users.create') }}" class="btn btn-success shadow-sm">
      <i class="bi bi-plus-lg"></i> Tambah Pengguna
    </a>
  </div>
</div>

<div class="card shadow-sm border-0">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Dibuat</th>
          </tr>
        </thead>
        <tbody>
          @forelse($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td><strong>{{ $user->nama }}</strong></td>
              <td>{{ $user->nim }}</td>
              <td>{{ $user->nama_kelas }}</td>
              <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d M Y') }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="6" class="text-center text-muted py-4">
                <i class="bi bi-exclamation-circle"></i> Belum ada data pengguna.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
