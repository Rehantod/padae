@extends('layout.sourcelayout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Tambah Data Jurusan</h2>

    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kode_jurusan" class="form-label">Kode Jurusan</label>
            <input type="text" name="kode_jurusan" id="kode_jurusan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
