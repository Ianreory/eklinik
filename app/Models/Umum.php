<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umum extends Model
{
    use HasFactory;

    protected $table = 'umum';

    protected $fillable = [
        'tanggal',
        'urut',
        'dokumen_medik',
        'nama',
        'l',
        'p',
        'no_identitas',
        'alamat',
        'jenis_kunjungan',
        'tindak_lanjut',
        'diagnosis',
        'terapi_obat',
        'keterangan',
        'user_id', // Pastikan 'user_id' ada di sini
        'pasien_id',
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
