@extends('layout.sourcelayout')

@section('title', 'Data Siswa')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card shadow-sm p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Data Siswa</h5>
            <a href="{{ route('siswa.create') }}" class="btn btn-success btn-sm">+ Tambah Siswa</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>{{ $siswa->jurusan }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->no_hp }}</td>
                            <td>
                                <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="d-inline">
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
