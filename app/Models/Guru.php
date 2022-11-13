<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    // memanggil table
    protected $table = 'guru';
    // memanggil colom"table guru
    protected $fillabel = ['nip', 'nama', 'nik', 'jabatan', 'bidang', 'alamat', 'tgl_lahir', 'gender', 'tempat_lahir', 'status_pegawai', 'status', 'no_telp', 'email', 'agama', 'foto'];
}
