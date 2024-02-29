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
        Schema::create('persalinan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('pasien_id')->constrained('pasien')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('nama_ibu');
            $table->integer('nik_ibu');
            $table->string('alamat');
            $table->string('sumber_pembiayaan');
            $table->integer('usia_ibu');
            $table->string('status_gpa')->nullable();
            $table->string('jarak')->nullable();
            $table->string('taksiran')->nullable();
            $table->string('tb')->nullable();
            $table->string('lila')->nullable();
            $table->string('status_imunisasi')->nullable();
            $table->string('injeksi_td')->nullable();
            $table->string('skrining')->nullable();
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
            $table->date('tgl_lahir')->nullable();
            $table->text('kurang_dari')->nullable();
            $table->text('lebih_dari')->nullable();
            $table->text('cara_persalinan')->nullable();
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
        Schema::dropIfExists('persalinan');
    }
};
