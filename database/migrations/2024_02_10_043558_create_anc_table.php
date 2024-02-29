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
        Schema::create('anc', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('pasien_id')->unique()->constrained('pasien')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('namaibu');
            $table->integer('nim');
            $table->string('nama_suami');
            $table->integer('nik');
            $table->string('no_kk');
            $table->text("alamat");
            $table->string('no_hp');
            $table->string('status');
            $table->string('statustt');
            $table->text('hpht')->nullable();
            $table->text('tp')->nullable();
            $table->text('tb')->nullable();
            $table->text('no_bpjs')->nullable();
            $table->text('namm_ibu')->nullable();
            // 
            // $table->date('tanggal_periksa')->nullable();
            // $table->string('keluhan')->nullable();
            // $table->text('usia_kehamilan')->nullable();
            // $table->text('lila')->nullable();
            // $table->text('bb')->nullable();
            // $table->text('td')->nullable();
            // $table->text('tfu')->nullable();
            // $table->text('djj')->nullable();
            // $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('anc');
    }
};
