@extends('layout.sourcelayout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold mb-3">Edit Data Kelas</h4>

    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas }}" required>
        </div>

        <div class="mb-3">
            <label>Tingkat</label>
            <select name="tingkat" class="form-control" required>
                <option value="X" {{ $kelas->tingkat == 'X' ? 'selected' : '' }}>X</option>
                <option value="XI" {{ $kelas->tingkat == 'XI' ? 'selected' : '' }}>XI</option>
                <option value="XII" {{ $kelas->tingkat == 'XII' ? 'selected' : '' }}>XII</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Paket Keahlian</label>
            <input type="text" name="paket_keahlian" class="form-control" value="{{ $kelas->paket_keahlian }}">
        </div>

        <div class="mb-3">
            <label>Rombel</label>
            <input type="text" name="rombel" class="form-control" value="{{ $kelas->rombel }}">
        </div>

        <div class="mb-3">
            <label>Wali Kelas</label>
            <select name="id_wali" class="form-control">
                <option value="">-- Pilih Guru --</option>
                @foreach($gurus as $g)
                    <option value="{{ $g->id }}" {{ $kelas->id_wali == $g->id ? 'selected' : '' }}>
                        {{ $g->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
