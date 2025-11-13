@extends('layout.sourcelayout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Data Jurusan</h2>
    <a href="{{ route('jurusan.create') }}" class="btn btn-primary mb-3">+ Tambah Jurusan</a>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Kode Jurusan</th>
                <th>Nama Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jurusan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->kode_jurusan }}</td>
                <td>{{ $item->nama_jurusan }}</td>
                <td>
                    <a href="{{ route('jurusan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('jurusan.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
