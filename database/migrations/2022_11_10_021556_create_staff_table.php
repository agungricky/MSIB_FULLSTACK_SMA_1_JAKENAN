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
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nip', 10)->unique();
            $table->string('nama', 50);
            $table->enum('gender', ['L', 'P']);
            $table->string('tanggal_lahir', 50);
            $table->string('alamat', 50);
            $table->string('no_hp');
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
        Schema::dropIfExists('staff');
    }
};
