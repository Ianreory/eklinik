<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persalinan extends Model
{
    use HasFactory;

    protected $table = 'persalinan';

    protected $fillable = [
        'user_id',
        'pasien_id',
        'nama_ibu',
        'nik_ibu',
        'alamat',
        'sumber_pembiayaan',
        'usia_ibu',
        'status_gpa',
        'jarak',
        'taksiran',
        'tb',
        'lila',
        'status_imunisasi',
        'injeksi_td',
        'skrining',
        'januari',
        'februari',
        'maret',
        'april',
        'mei',
        'juni',
        'juli',
        'agustus',
        'september',
        'oktober',
        'november',
        'desember',
        'tgl_lahir',
        'kurang_dari',
        'lebih_dari',
        'cara_persalinan',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

}
