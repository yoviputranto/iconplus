<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->string('id');
            $table->string('no_surat');
            $table->string('perihal');
            $table->date('tgl_surat');
            $table->string('nama_program');
            $table->string('pemberi_kerja');
            $table->string('kategori');
            $table->string('divisi');
            $table->date('target_selesai');
            $table->string('dokumen');
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
        Schema::dropIfExists('program');
    }
}
