<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('staff')->insert(
                [
                    'nip' => rand(),
                    'nama' => uniqid('nama_'),
                    'gender' => Arr::random(['L', 'P']),
                    'tanggal_lahir' => uniqid('tanggal_lahir_'),
                    'alamat' => uniqid('alamat_'),
                    'no_hp' => uniqid('no_hp_'),
                    'foto' => uniqid('foto_'),
                    'created_at' => new \DateTime(),
                    'updated_at' => null
                ]
            );
        }
    }
}
