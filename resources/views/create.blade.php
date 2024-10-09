<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Surat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fffdfe;
        }
        .form-container {
            background-color: rgb(230, 16, 159);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #f5f7f9;
            font-weight: bold;
        }
        label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .text-muted {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="form-container mx-auto col-md-8 col-lg-6">
            <h1 class="text-center mb-4">Tambah Surat</h1>
            <form action="{{route('surat.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="nomor_surat" class="form-label">Nomor Surat</label>
                    <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" placeholder="Masukkan Nomor Surat" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_surat" class="form-label">Jenis Surat</label>
                    <select class="form-select" id="jenis_surat" name="jenis_surat" required>
                        <option value="" disabled selected>Pilih Jenis Surat</option>
                        <option value="masuk">Masuk</option>
                        <option value="keluar">Keluar</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pengirim" class="form-label">Pengirim</label>
                    <input type="text" class="form-control" id="pengirim" name="pengirim" placeholder="Masukkan Nama Pengirim" required>
                </div>
                <div class="mb-3">
                    <label for="penerima" class="form-label">Penerima</label>
                    <input type="text" class="form-control" id="penerima" name="penerima" placeholder="Masukkan Nama Penerima" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                    <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_terima" class="form-label">Tanggal Terima <span class="text-muted">(hanya untuk surat masuk)</span></label>
                    <input type="date" class="form-control" id="tanggal_terima" name="tanggal_terima">
                </div>
                <div class="mb-3">
                    <label for="perihal" class="form-label">Perihal</label>
                    <textarea class="form-control" id="perihal" name="perihal" rows="3" placeholder="Masukkan Perihal" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="lampiran" class="form-label">Lampiran <span class="text-muted">(opsional)</span></label>
                    <input type="text" class="form-control" id="lampiran" name="lampiran" placeholder="Masukkan Lampiran">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="" disabled selected>Pilih Status Surat</option>
                        <option value="diproses">Diproses</option>
                        <option value="selesai">Selesai</option>
                        <option value="ditolak">Ditolak</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Tambah Surat</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
