@extends('layout.sourcelayout')

@section('title', 'Edit Guru')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card shadow-sm p-4">
        <h5 class="mb-3">Edit Guru</h5>
        <form action="{{ route('guru.update', $guru->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" value="{{ $guru->nip }}" required>
            </div>
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $guru->nama }}" required>
            </div>
            <div class="mb-3">
                <label>Mata Pelajaran</label>
                <input type="text" name="mapel" class="form-control" value="{{ $guru->mapel }}">
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki" {{ $guru->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $guru->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control">{{ $guru->alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control" value="{{ $guru->no_hp }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
