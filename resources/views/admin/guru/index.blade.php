@extends('layout.sourcelayout')

@section('title', 'Data Guru')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card shadow-sm p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Data Guru</h5>
            <a href="{{ route('guru.create') }}" class="btn btn-success btn-sm">+ Tambah Guru</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Mapel</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gurus as $guru)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $guru->nip }}</td>
                            <td>{{ $guru->nama }}</td>
                            <td>{{ $guru->mapel }}</td>
                            <td>{{ $guru->jenis_kelamin }}</td>
                            <td>{{ $guru->alamat }}</td>
                            <td>{{ $guru->no_hp }}</td>
                            <td>
                                <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
