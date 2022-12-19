<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    // use HasFactory;
    // protected $table = 'spp';

    // //memanggil ke kolom field
    // protected $fillabel = ['id', 'tanggal', 'total', 'kurang', 'siswa_id'];

    use HasFactory;
    protected $table = 'siswa';
    protected $fillabel = ['id', 'nama_siswa'];
}
