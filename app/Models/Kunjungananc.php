<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungananc extends Model
{
    use HasFactory;

    protected $table = 'kunjungananc';
    protected $fillable = [
        'anc_id',
        'tanggal_periksa',
        'keluhan',
        'usia_kehamilan',
        'lila',
        'bb',
        'td',
        'tfu',
        'djj',
        'keterangan',
    ];
    public function anc()
    {
        return $this->belongsTo(Anc::class);
    }
}
