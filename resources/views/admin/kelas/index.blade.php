@extends('layout.sourcelayout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold mb-3">Data Kelas</h4>

    <a href="{{ route('kelas.create') }}" class="btn btn-success mb-3">+ Tambah Kelas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Tingkat</th>
                    <th>Paket Keahlian</th>
                    <th>Rombel</th>
                    <th>Wali Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kelas as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->nama_kelas }}</td>
                    <td>{{ $k->tingkat }}</td>
                    <td>{{ $k->paket_keahlian }}</td>
                    <td>{{ $k->rombel }}</td>
                    <td>{{ $k->waliKelas->nama ?? '-' }}</td>
                    <td>
                        <a href="{{ route('kelas.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" class="d-inline">
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
