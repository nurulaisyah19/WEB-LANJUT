<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $mks = MataKuliah::all();
        $title = 'Daftar Mata Kuliah';
        return view('list_mk', compact('mks', 'title'));
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);
        return view('edit_mk', compact('mk'));
    }

    // Proses update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $mk = MataKuliah::findOrFail($id);
        $mk->update([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Proses hapus data
    public function destroy($id)
    {
        $mk = MataKuliah::findOrFail($id);
        $mk->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil dihapus!');
    }
}
