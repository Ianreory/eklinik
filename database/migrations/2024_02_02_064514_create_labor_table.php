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
        Schema::create('labor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('pasien_id')->constrained('pasien')->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('tanggal');
            $table->string('nama');
            $table->integer('umur');
            $table->string('nik');
            $table->string('T_D')->nullable();
            $table->string('pols')->nullable();
            $table->string('glu')->nullable();
            $table->string('khd')->nullable();
            $table->string('urid')->nullable();
            $table->string('hd')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('labor');
    }
};
