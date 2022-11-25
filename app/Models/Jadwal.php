<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    //memanggil ke kolom field
    protected $fillabel = ['hari', 'jam', 'kelas', 'mapel'];
}
