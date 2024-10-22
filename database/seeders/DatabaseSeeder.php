<?php

namespace Database\Seeders;

use App\Models\Detail; // Pastikan Detail diimpor
use App\Models\Surat;  // Pastikan Surat diimpor
use App\Models\Penulis; // Pastikan Penulis diimpor
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat data Detail
        $detail1 = Detail::create([
            'nama' => 'Peminjaman',
        ]);

        // Membuat data Surat dengan relasi ke Detail
        $surat1 = Surat::create([ // Ganti $Surat1 menjadi $surat1
            "nomor_surat" => '12',
            "jenis_surat" => 'Masuk',
            "pengirim" => 'Lola',
            "penerima" => 'Wadek3',
            "tanggal_surat" => '2022-01-01',
            "tanggal_terima" => '2022-01-05',
            "perihal" => 'Peminjaman GB',
            "lampiran" => '1',
            "status" => 'selesai',
            "detail_id" => $detail1->id, // Menghubungkan dengan detail yang telah dibuat
        ]);

        $detail2 = Detail::create([
            'nama' => 'Proposal',
        ]);

        // Membuat data Surat dengan relasi ke Detail
        $surat2 = Surat::create([ // Ganti $Surat1 menjadi $surat1
            "nomor_surat" => '13',
            "jenis_surat" => 'keluar',
            "pengirim" => 'dewi',
            "penerima" => 'Wadek2',
            "tanggal_surat" => '2022-01-05',
            "tanggal_terima" => '2022-01-10',
            "perihal" => 'Peminjaman GB',
            "lampiran" => '2',
            "status" => 'selesai',
            "detail_id" => $detail2->id, // Menghubungkan dengan detail yang telah dibuat
        ]);

        // Membuat data Penulis
        $Penulis1 =Penulis::create([
            'nama' => 'Lola',
            'surat_id' => $surat1->id // 1
        ]);

        $Penulis2 =Penulis::create([
            'nama' => 'Yashinta',
            'surat_id' => $surat1->id // 1
        ]);

        $Penulis3 =Penulis::create([
            'nama' => 'Lola yd',
            'surat_id' => $surat1->id // 1
        ]);


         // Membuat data Penulis
         $Penulis4 =Penulis::create([
            'nama' => 'redho',
            'surat_id' => $surat2->id // 2
        ]);

        $Penulis5 =Penulis::create([
            'nama' => 'dho',
            'surat_id' => $surat2->id //  2r
        ]);

        $Penulis6 =Penulis::create([
            'nama' => 'pasmawan',
            'surat_id' => $surat2->id //  2
        ]);
    }


}
