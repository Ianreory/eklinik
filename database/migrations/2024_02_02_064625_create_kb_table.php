<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kb', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('pasien_id')->constrained('pasien')->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('tanggal');
            $table->string('nama');
            $table->integer('umur');
            $table->string('nama_suami')->nullable();
            $table->text('nik_alamat');
            $table->text('alkon')->nullable();
            $table->text('januari')->nullable();
            $table->text('februari')->nullable();
            $table->text('maret')->nullable();
            $table->text('april')->nullable();
            $table->text('mei')->nullable();
            $table->text('juni')->nullable();
            $table->text('juli')->nullable();
            $table->text('agustus')->nullable();
            $table->text('september')->nullable();
            $table->text('oktober')->nullable();
            $table->text('november')->nullable();
            $table->text('desember')->nullable();
            $table->text('hasil_pemeriksaan')->nullable();
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
        Schema::dropIfExists('kb');
    }
};
