@extends('layout.sourcelayout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold mb-3">Tambah Mata Pelajaran</h4>

    <form action="{{ route('mapel.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Kode Mapel</label>
            <input type="text" name="kode_mapel" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama Mapel</label>
            <input type="text" name="nama_mapel" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kelompok</label>
            <input type="text" name="kelompok" class="form-control" placeholder="Contoh: A / B / C">
        </div>

        <div class="mb-3">
            <label>KKM</label>
            <input type="number" name="kkm" class="form-control" value="75" min="0" max="100" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('mapel.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
