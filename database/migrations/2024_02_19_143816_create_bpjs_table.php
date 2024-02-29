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
        Schema::create('bpjs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('kunjungan_bpjs_id')->constrained('kunjungan_bpjs')->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('Perawatan', ['Rawat jalan', 'Rawat inap', 'Promotif preventif']);
            $table->date('tgl_kunjungan');
            $table->text('keluhan');
            $table->text('anamnesa');
            $table->string('makanan');
            $table->string('udara');
            $table->string('obat');
            $table->string('prognosa');
            $table->text('terapi');
            $table->text('terapi_non');
            $table->text('bmhp');
            $table->text('diagnosis');
            $table->text('kesadaran');
            $table->text('suhu');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->integer('lingkar_perut');
            $table->integer('imt');
            $table->integer('sistole');
            $table->integer('diastole');
            $table->integer('respiratory_rate');
            $table->integer('heart_rate');
            $table->string('tenaga_medis');
            $table->string('pelayanan');
            $table->string('statuspulang');
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
        Schema::dropIfExists('bpjs');
    }
};
