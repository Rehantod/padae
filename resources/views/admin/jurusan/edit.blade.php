@extends('layout.sourcelayout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Edit Data Jurusan</h2>

    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="kode_jurusan" class="form-label">Kode Jurusan</label>
            <input type="text" name="kode_jurusan" id="kode_jurusan" class="form-control"
                value="{{ $jurusan->kode_jurusan }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control"
                value="{{ $jurusan->nama_jurusan }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
