<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bpjs extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kunjungan_bpjs_id',
        'Perawatan',
        'tgl_kunjungan',
        'keluhan',
        'anamnesa',
        'makanan',
        'udara',
        'obat',
        'prognosa',
        'terapi',
        'terapi_non',
        'bmhp',
        'diagnosis',
        'kesadaran',
        'suhu',
        'tinggi_badan',
        'berat_badan',
        'lingkar_perut',
        'imt',
        'sistole',
        'diastole',
        'respiratory_rate',
        'heart_rate',
        'tenaga_medis',
        'pelayanan',
        'statuspulang',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kunjungan_bpjs()
    {
        return $this->belongsTo(kunjungan_bpjs::class, 'kunjungan_bpjs_id');
    }

}
