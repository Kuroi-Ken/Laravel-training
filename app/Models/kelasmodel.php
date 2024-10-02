<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelasmodel extends Model
{
    use HasFactory;
    protected $table = "kelas";
    protected $fillable = ['kode_kelas','nama_kelas'] ;

    public function siswa()
    {
        return $this->hasMany('app\Models\siswamodel', 'kelas_id');
    }
}