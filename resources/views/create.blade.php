<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Surat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Tambah Surat</h1>
        <form action="{{ route('surat.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nomor_surat" class="form-label">Nomor Surat</label>
                <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
            </div>
            <div class="mb-3">
                <label for="jenis_surat" class="form-label">Jenis Surat</label>
                <select class="form-control" id="jenis_surat" name="jenis_surat" required>
                    <option value="masuk">Masuk</option>
                    <option value="keluar">Keluar</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pengirim" class="form-label">Pengirim</label>
                <input type="text" class="form-control" id="pengirim" name="pengirim" required>
            </div>
            <div class="mb-3">
                <label for="penerima" class="form-label">Penerima</label>
                <input type="text" class="form-control" id="penerima" name="penerima" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_terima" class="form-label">Tanggal Terima (hanya untuk surat masuk)</label>
                <input type="date" class="form-control" id="tanggal_terima" name="tanggal_terima">
            </div>
            <div class="mb-3">
                <label for="perihal" class="form-label">Perihal</label>
                <textarea class="form-control" id="perihal" name="perihal" required></textarea>
            </div>
            <div class="mb-3">
                <label for="lampiran" class="form-label">Lampiran (opsional)</label>
                <input type="text" class="form-control" id="lampiran" name="lampiran">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="diproses">Diproses</option>
                    <option value="selesai">Selesai</option>
                    <option value="ditolak">Ditolak</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Surat</button>
        </form>
    </div>
</body>
</html>
