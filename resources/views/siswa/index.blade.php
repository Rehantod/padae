@extends('layout.sourcelayout')
@section('content')
@section('title', 'Data Siswa')
<h1>Halo ini data Siswa</h1>
<!DOCTYPE html>
<html lang="id">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Variabel Warna untuk Konsistensi */
        :root {
            --color-primary: #4A90E2;
            /* Biru terang dari header */
            --color-background: #f4f6f9;
            /* Latar belakang halaman */
            --color-border: #ddd;
            --color-text-dark: #333;
        }

        /* Reset dan Gaya Body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--color-background);
            color: var(--color-text-dark);
        }

        /* Container Utama */
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Halaman (Sesuai Screenshot Anda) */
        .page-header {
            padding: 20px 0;
        }

        .page-header h1 {
            font-weight: 500;
            font-size: 28px;
            margin: 0;
        }

        /* Card Data */
        .data-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            margin-top: 15px;
        }

        .card-body {
            padding: 20px;
        }

        /* Tombol Aksi */
        .btn-primary {
            display: inline-block;
            padding: 8px 15px;
            background-color: var(--color-primary);
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 15px;
        }

        .btn-primary:hover {
            background-color: #3d7ad6;
        }

        /* Gaya Tabel */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .data-table th,
        .data-table td {
            padding: 12px 15px;
            border-bottom: 1px solid var(--color-border);
            text-align: left;
        }

        .data-table th {
            background-color: #f7f7f7;
            font-weight: 600;
            color: #555;
        }

        .data-table tbody tr:hover {
            background-color: #fcfcfc;
        }

        .text-center {
            text-align: center !important;
        }

        /* Gaya Tombol Aksi Tabel */
        .btn-action {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            font-size: 12px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 5px;
            display: inline-block;
        }

        .btn-action.edit {
            background-color: #ffc107;
            /* Kuning */
            color: #333;
        }

        .btn-action.delete {
            background-color: #dc3545;
            /* Merah */
            color: white;
        }
    </style>
</head>

<body>
    {{-- 
    <div class="container">
        <div class="page-header">
            <h1>Halo ini data Siswa</h1>
        </div> --}}

    <div class="data-card">
        <div class="card-body">

           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahSiswaModal">
    + Tambah Siswa Baru
</button>
<div class="modal fade" id="tambahSiswaModal" tabindex="-1" aria-labelledby="tambahSiswaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahSiswaModalLabel">Tambah Data Siswa Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form method="POST" action="{{ route('siswa.tambah.store') }}">
                @csrf 
                
                <div class="modal-body">
                    
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ old('nis') }}" required>
                        @error('nis')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ old('kelas') }}" required>
                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Siswa</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($siswa->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center">Data siswa belum tersedia.</td>
                        </tr>
                    @else
                        @foreach ($siswa as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td>{{ $data->jurusan }}</td>
                                <td>
                                    <a href="#" class="btn-action edit">Edit</a>
                                    {{-- Contoh di file index.blade.php dalam loop --}}
                                    <form action="{{ route('siswa.destroy', $data->id) }}" method="POST"
                                        style="display:inline;">
                                        {{-- Ini wajib untuk keamanan Laravel --}}
                                        @csrf

                                        {{-- Ini wajib untuk mengubah metode POST menjadi DELETE --}}
                                        @method('DELETE')

                                        <button type="submit" onclick="return confirm('Yakin hapus data ini?')"
                                            class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    </div>

</body>

</html>
@endsection()

    @if ($errors->any())
    <script>
    // Ambil elemen modal
    var myModal = new bootstrap.Modal(document.getElementById('tambahSiswaModal'));
    // Tampilkan modal
     myModal.show();
    </script>
    @endif