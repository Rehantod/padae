<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Guru;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::with('waliKelas')->get();
        return view('admin.kelas.index', compact('kelas'));
    }

    public function create()
    {
        $gurus = Guru::all();
        return view('admin.kelas.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:100',
            'tingkat' => 'required|string|max:10',
            'paket_keahlian' => 'nullable|string|max:100',
            'rombel' => 'nullable|string|max:10',
            'id_wali' => 'nullable|exists:gurus,id',
        ]);

        Kelas::create($request->all());
        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $gurus = Guru::all();
        return view('admin.kelas.edit', compact('kelas', 'gurus'));
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);

        $request->validate([
            'nama_kelas' => 'required|string|max:100',
            'tingkat' => 'required|string|max:10',
            'paket_keahlian' => 'nullable|string|max:100',
            'rombel' => 'nullable|string|max:10',
            'id_wali' => 'nullable|exists:gurus,id',
        ]);

        $kelas->update($request->all());
        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil dihapus!');
    }
}
