@extends('layout.sourcelayout')
@section('content')
@section('title','Data Siswa')
<h1>Halo ini data Siswa</h1>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <style>
        /* Variabel Warna untuk Konsistensi */
        :root {
            --color-primary: #4A90E2; /* Biru terang dari header */
            --color-background: #f4f6f9; /* Latar belakang halaman */
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

        .data-table th, .data-table td {
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
            background-color: #ffc107; /* Kuning */
            color: #333;
        }

        .btn-action.delete {
            background-color: #dc3545; /* Merah */
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
                
                <a href="#" class="btn-primary">
                    + Tambah Siswa Baru
                </a>
                
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12345</td>
                            <td>Budi Santoso</td>
                            <td>XI RPL</td>
                            <td>
                                <a href="#" class="btn-action edit">Edit</a>
                                <a href="#" class="btn-action delete">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>54321</td>
                            <td>Siti Fatimah</td>
                            <td>X TKJ</td>
                            <td>
                                <a href="#" class="btn-action edit">Edit</a>
                                <a href="#" class="btn-action delete">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    
</body>
</html>
@endsection()