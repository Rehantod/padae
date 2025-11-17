<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; // Pastikan mengimpor Model Siswa

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all(); 

        return view('Siswa.index', compact('siswa')); 
    }
    public function detail($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.detail', compact('siswa'));
    }
    public function create()
    {
        return view('Siswa.tambah'); 
    }
    public function store(Request $request)
    {
        $request->validate([   
            'nis' => 'required|unique:siswa|max:15',
            'nama' => 'required|max:100',
            'kelas' => 'required|max:10',
        ]);

        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ]);
    }
    public function destroy($id)
    {
        Siswa::destroy($id); 
        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil dihapus secara simpel!');
    }
}
