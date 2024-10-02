<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswamodel extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['kelas_id', 'nis', 'nama','gender','alamat'];

    public function kelas()
    {
        return $this->belongsTo('app\Models\kelasmodel', 'kelas_id');
    }
}