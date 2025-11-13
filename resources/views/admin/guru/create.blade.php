@extends('layout.sourcelayout')

@section('title', 'Tambah Guru')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card shadow-sm p-4">
        <h5 class="mb-3">Tambah Guru</h5>
        <form action="{{ route('guru.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Mata Pelajaran</label>
                <input type="text" name="mapel" class="form-control">
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
