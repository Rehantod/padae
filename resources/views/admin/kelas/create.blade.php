@extends('layout.sourcelayout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold mb-3">Tambah Data Kelas</h4>

    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tingkat</label>
            <select name="tingkat" class="form-control" required>
                <option value="">-- Pilih Tingkat --</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Paket Keahlian</label>
            <input type="text" name="paket_keahlian" class="form-control">
        </div>

        <div class="mb-3">
            <label>Rombel</label>
            <input type="text" name="rombel" class="form-control">
        </div>

        <div class="mb-3">
            <label>Wali Kelas</label>
            <select name="id_wali" class="form-control">
                <option value="">-- Pilih Guru --</option>
                @foreach($gurus as $g)
                    <option value="{{ $g->id }}">{{ $g->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
