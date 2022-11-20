<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    //memanggil ke kolom field
    protected $fillabel = ['id', 'keterangan', 'jam', 'hari', 'tanggal', 'perihal', 'upload'];
}
