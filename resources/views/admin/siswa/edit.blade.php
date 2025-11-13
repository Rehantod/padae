@extends('layout.sourcelayout')

@section('title', 'Edit Siswa')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card shadow-sm p-4">
        <h5 class="mb-3">Edit Siswa</h5>
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>NIS</label>
                <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" required>
            </div>
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}" required>
            </div>
            <div class="mb-3">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="{{ $siswa->jurusan }}" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control">{{ $siswa->alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control" value="{{ $siswa->no_hp }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
