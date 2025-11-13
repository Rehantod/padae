@extends('layout.sourcelayout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold mb-3">Data Mata Pelajaran</h4>

    <a href="{{ route('mapel.create') }}" class="btn btn-success mb-3">+ Tambah Mapel</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Mapel</th>
                    <th>Kelompok</th>
                    <th>KKM</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mapels as $mapel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mapel->kode_mapel }}</td>
                    <td>{{ $mapel->nama_mapel }}</td>
                    <td>{{ $mapel->kelompok }}</td>
                    <td>{{ $mapel->kkm }}</td>
                    <td>
                        <a href="{{ route('mapel.edit', $mapel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('mapel.destroy', $mapel->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
