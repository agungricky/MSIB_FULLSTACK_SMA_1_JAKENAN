<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    //memanggil table
    protected $table = 'siswa';
    //memanggil ke kolom field
    protected $fillabel = ['NIS', 'nama_siswa', 'tempat_lahir', 'jenis_kelamin', 'tgl_lahir', 'agama', 'alamat', 'status_siswa', 'foto'];
}
