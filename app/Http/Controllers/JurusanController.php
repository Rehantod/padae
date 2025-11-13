<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('admin.jurusan.index', compact('jurusan'));
    }

    public function create()
    {
        return view('admin.jurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_jurusan' => 'required|unique:jurusan',
            'nama_jurusan' => 'required',
        ]);

        Jurusan::create($request->all());
        return redirect()->route('jurusan.index')->with('success', 'Data jurusan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $request->validate([
            'kode_jurusan' => 'required|unique:jurusan,kode_jurusan,' . $jurusan->id,
            'nama_jurusan' => 'required',
        ]);

        $jurusan->update($request->all());
        return redirect()->route('jurusan.index')->with('success', 'Data jurusan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index')->with('success', 'Data jurusan berhasil dihapus!');
    }
}
