<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillabel = ['Kelas'];

    //relasi one two many
    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
