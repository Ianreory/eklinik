<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anc extends Model
{
    use HasFactory;
    protected $table = 'anc';
    protected $fillable = [
        'user_id',
        'pasien_id',
        'namaibu',
        'nim',
        'nama_suami',
        'nik',
        'no_kk',
        'alamat',
        'no_hp',
        'status',
        'statustt',
        'hpht',
        'tp',
        'tb',
        'no_bpjs',
        'namm_ibu',
        // 'tanggal_periksa',
        // 'keluhan',
        // 'usia_kehamilan',
        // 'lila',
        // 'bb',
        // 'td',
        // 'tfu',
        // 'djj',
        // 'keterangan',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
    public function kunjungananc()
    {
        return $this->hasMany(Kunjungananc::class);
    }
}
