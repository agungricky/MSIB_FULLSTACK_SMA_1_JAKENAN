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
    protected $fillabel = ['nip', 'nama', 'alamat', 'tgl_lahir', 'gender', 'tempat_lahir', 'no_telp', 'email', 'agama', 'foto'];


    //relasi one two many
    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
