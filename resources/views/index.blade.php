<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Surat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Surat</h1>
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
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
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td> <!-- Penomoran otomatis -->
                    <td>{{ $row->nomor_surat }}</td>
                    <td>{{ $row->jenis_surat }}</td>
                    <td>{{ $row->pengirim }}</td>
                    <td>{{ $row->penerima }}</td>
                    <td>{{ $row->tanggal_surat }}</td>
                    <td>{{ $row->tanggal_terima }}</td>
                    <td>{{ $row->perihal }}</td>
                    <td>{{ $row->lampiran }}</td>
                    <td>{{ $row->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Optional for interactive features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
