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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_whatsapp');
            $table->longText('alamat_lengkap');
            $table->string('tempat_tgl_lahir');
            $table->string('pekerjaan');
            $table->string('nama_usaha');
            $table->string('bukti_po');
            $table->string('invoice');
            $table->rememberToken();
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
        Schema::dropIfExists('forms');
    }
};
