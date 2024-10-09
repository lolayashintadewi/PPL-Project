<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Surat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 30px;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
            transition: all 0.3s;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .table th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .table td {
            vertical-align: middle;
            text-align: center;
        }
        .btn-warning {
            background-color: #ffc107;
            border: none;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Data Surat Keluar Masuk</h1>

        <!-- Tombol Tambah Surat -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('surat.create') }}" class="btn btn-success">Tambah Surat</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>Jenis Surat</th>
                    <th>Pengirim</th>
                    <th>Penerima</th>
                    <th>Tanggal Surat</th>
                    <th>Tanggal Terima</th>
                    <th>Perihal</th>
                    <th>Lampiran</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $surat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $surat->nomor_surat }}</td>
                    <td>{{ $surat->jenis_surat }}</td>
                    <td>{{ $surat->pengirim }}</td>
                    <td>{{ $surat->penerima }}</td>
                    <td>{{ $surat->tanggal_surat }}</td>
                    <td>{{ $surat->tanggal_terima }}</td>
                    <td>{{ $surat->perihal }}</td>
                    <td>{{ $surat->lampiran }}</td>
                    <td>{{ $surat->status }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('surat.edit', $surat->id) }}" class="btn btn-warning me-2">Edit</a>
                        <form action="{{ route('surat.destroy', $surat->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus surat ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
