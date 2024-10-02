<?php

namespace Database\Seeders;

use App\Models\kelasmodel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            kelasmodel::create([
                'kode_kelas' => 'MTK01',
                'nama_kelas' => 'Kamboja'
            ]);
            kelasmodel::create([
                'kode_kelas' => 'IPA01',
                'nama_kelas' => 'Melati'
            ]);
            kelasmodel::create([
                'kode_kelas' => 'TIK01',
                'nama_kelas' => 'Anggrek'
            ]);
        
    }
}