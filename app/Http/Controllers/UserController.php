<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    // 🔹 Menampilkan daftar user
    public function index()
    {
        $users = UserModel::with('kelas')->get();
        $title = 'Daftar Pengguna';
        return view('users.index', compact('users', 'title'));
    }

    // 🔹 Menampilkan form tambah user baru
    public function create()
    {
        $kelas = Kelas::all(); // <-- ini bagian penting
        $title = 'Buat Pengguna Baru';
        return view('users.create', compact('kelas', 'title'));
    }

    // 🔹 Simpan data user baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:50|unique:users,nim',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        UserModel::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('users.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }
}
