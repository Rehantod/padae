<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapels = Mapel::all();
        return view('admin.mapel.index', compact('mapels'));
    }

    public function create()
    {
        return view('admin.mapel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mapel' => 'required|unique:mapels,kode_mapel',
            'nama_mapel' => 'required|string|max:100',
            'kelompok' => 'nullable|string|max:5',
            'kkm' => 'required|integer|min:0|max:100',
        ]);

        Mapel::create($request->all());
        return redirect()->route('mapel.index')->with('success', 'Data mata pelajaran berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mapel = Mapel::findOrFail($id);
        return view('admin.mapel.edit', compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $mapel = Mapel::findOrFail($id);

        $request->validate([
            'kode_mapel' => 'required|unique:mapels,kode_mapel,' . $mapel->id,
            'nama_mapel' => 'required|string|max:100',
            'kelompok' => 'nullable|string|max:5',
            'kkm' => 'required|integer|min:0|max:100',
        ]);

        $mapel->update($request->all());
        return redirect()->route('mapel.index')->with('success', 'Data mata pelajaran berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $mapel = Mapel::findOrFail($id);
        $mapel->delete();
        return redirect()->route('mapel.index')->with('success', 'Data mata pelajaran berhasil dihapus!');
    }
}
