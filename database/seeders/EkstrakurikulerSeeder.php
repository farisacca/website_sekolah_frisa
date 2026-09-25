<?php

namespace Database\Seeders;

use App\Models\Ekstrakurikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            Ekstrakurikuler::create([
                'namaa_eskul' => 'Paskibra SMAN 24 Bandung',
                'pembina' => 'Dedi Kurniawan, S.Pd,',
                'jadwal_latihan' => 'Setiap Rabu & Sabtu 15:30 WIB',
                'deskripsi' => 'Pasukan Pengibar Bendera SMA Negeri 24 Bandung',
                'gambar' => 'paskibra.jpg',
            ]);

    }
}
