@extends('layout.sourcelayout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold mb-3">Edit Mata Pelajaran</h4>

    <form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Kode Mapel</label>
            <input type="text" name="kode_mapel" class="form-control" value="{{ $mapel->kode_mapel }}" required>
        </div>

        <div class="mb-3">
            <label>Nama Mapel</label>
            <input type="text" name="nama_mapel" class="form-control" value="{{ $mapel->nama_mapel }}" required>
        </div>

        <div class="mb-3">
            <label>Kelompok</label>
            <input type="text" name="kelompok" class="form-control" value="{{ $mapel->kelompok }}">
        </div>

        <div class="mb-3">
            <label>KKM</label>
            <input type="number" name="kkm" class="form-control" value="{{ $mapel->kkm }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('mapel.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
