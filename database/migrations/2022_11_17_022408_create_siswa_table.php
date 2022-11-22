<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('NIS', 10)->unique();
            $table->string('nama_siswa', 50);
            $table->tinyText('tempat_lahir', 50);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tgl_lahir', 50);
            $table->enum('agama', ['Islam', 'Hindu', 'Khatolik', 'Budha', 'Kristen', 'Lainya']);
            $table->tinyText('alamat', 50);
            $table->enum('status_siswa', ['Lulus', 'Aktif', 'Pindah', 'Keluar']);
            $table->string('foto', 13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
