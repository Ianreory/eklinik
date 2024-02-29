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
        Schema::create('kunjungananc', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anc_id')->constrained('anc')->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('tanggal_periksa')->nullable();
            $table->string('keluhan')->nullable();
            $table->text('usia_kehamilan')->nullable();
            $table->text('lila')->nullable();
            $table->text('bb')->nullable();
            $table->text('td')->nullable();
            $table->text('tfu')->nullable();
            $table->text('djj')->nullable();
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
        Schema::dropIfExists('kunjungananc');
    }
};
