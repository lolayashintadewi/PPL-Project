<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Surat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #faf8f9;
        }
        .form-container {
            background-color: rgb(255, 255, 255);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(246, 76, 161, 0.1);
            margin-top: 50px;
        }
        h1 {
            color: #007bff;
            font-weight: bold;
            text-align: center;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control:focus {
            border-color: #ff00a2;
            box-shadow: 0 0 5px rgba(241, 2, 134, 0.5);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        .alert-danger ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container mx-auto col-md-8 col-lg-6">
            <h1>Edit Surat</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('surat.update', $surat->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Pastikan menggunakan method PUT -->

                <div class="mb-3">
                    <label for="nomor_surat" class="form-label">Nomor Surat</label>
                    <input type="text" class="form-control" name="nomor_surat" placeholder="Masukkan Nomor Surat" value="{{ old('nomor_surat', $surat->nomor_surat) }}" required>
                    @error('nomor_surat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jenis_surat" class="form-label">Jenis Surat</label>
                    <select class="form-select" name="jenis_surat" required>
                        <option value="masuk" {{ old('jenis_surat', $surat->jenis_surat) == 'masuk' ? 'selected' : '' }}>Masuk</option>
                        <option value="keluar" {{ old('jenis_surat', $surat->jenis_surat) == 'keluar' ? 'selected' : '' }}>Keluar</option>
                    </select>
                    @error('jenis_surat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="pengirim" class="form-label">Pengirim</label>
                    <input type="text" class="form-control" name="pengirim" placeholder="Masukkan Pengirim" value="{{ old('pengirim', $surat->pengirim) }}" required>
                    @error('pengirim')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="penerima" class="form-label">Penerima</label>
                    <input type="text" class="form-control" name="penerima" placeholder="Masukkan Penerima" value="{{ old('penerima', $surat->penerima) }}" required>
                    @error('penerima')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                    <input type="date" class="form-control" name="tanggal_surat" value="{{ old('tanggal_surat', $surat->tanggal_surat) }}" required>
                    @error('tanggal_surat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tanggal_terima" class="form-label">Tanggal Terima</label>
                    <input type="date" class="form-control" name="tanggal_terima" value="{{ old('tanggal_terima', $surat->tanggal_terima) }}">
                    @error('tanggal_terima')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" name="stok" placeholder="Masukkan Stok" value="{{ old('stok', $surat->stok) }}" required>
                    @error('stok')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="perihal" class="form-label">Perihal</label>
                    <input type="text" class="form-control" name="perihal" placeholder="Masukkan Perihal" value="{{ old('perihal', $surat->perihal) }}" required>
                    @error('perihal')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="lampiran" class="form-label">Lampiran</label>
                    <input type="text" class="form-control" name="lampiran" placeholder="Masukkan Lampiran" value="{{ old('lampiran', $surat->lampiran) }}">
                    @error('lampiran')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" name="status" required>
                        <option value="diproses" {{ old('status', $surat->status) == 'diproses' ? 'selected' : '' }}>Diproses</option>
                        <option value="selesai" {{ old('status', $surat->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="ditolak" {{ old('status', $surat->status) == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
