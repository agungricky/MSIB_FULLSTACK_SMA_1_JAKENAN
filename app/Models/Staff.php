<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    //mapping ke table
    protected $table = 'staff';
    //mapping ke kolom field
    protected $fillabel = ['nip', 'nama', 'gender', 'tanggal_lahir', 'alamat', 'no_hp', 'foto'];
}
