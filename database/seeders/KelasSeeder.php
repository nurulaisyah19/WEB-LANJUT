<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        Kelas::insert([
            ['nama_kelas' => 'Kelas A'],
            ['nama_kelas' => 'Kelas B'],
            ['nama_kelas' => 'Kelas C'],
        ]);
    }
}
