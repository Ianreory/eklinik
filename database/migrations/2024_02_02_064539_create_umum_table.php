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
        Schema::create('umum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('pasien_id')->constrained('pasien')->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('tanggal');
            $table->integer('urut');
            $table->text('dokumen_medik');
            $table->string('nama');
            $table->string('l');
            $table->string('p');
            $table->string('no_identitas');
            $table->text('alamat');
            $table->enum('jenis_kunjungan', ['Baru', 'Ulang']);
            $table->enum('tindak_lanjut', ['Dirawat', 'Dirujuk', 'Pulang']);
            $table->string('diagnosis')->nullable();
            $table->text('terapi_obat')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('umum');
    }
};
