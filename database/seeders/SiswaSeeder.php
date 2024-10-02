<?php

namespace Database\Seeders;

use App\Models\siswamodel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        siswamodel::create([
            'kelas_id' => '0001',
            'nis' => '22012',
            'nama' => 'bayu',
            'gender' => 'male',
            'alamat' => 'jogja',
        ]);
        siswamodel::create([
            'kelas_id' => '0002',
            'nis' => '22013',
            'nama' => 'bagas',
            'gender' => 'male',
            'alamat' => 'lamongan',
        ]);
        siswamodel::create([
            'kelas_id' => '0003',
            'nis' => '22014',
            'nama' => 'bila',
            'gender' => 'female',
            'alamat' => 'jogja',
        ]);
    }
}