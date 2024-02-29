<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kb extends Model
{
    use HasFactory;

    protected $table = 'kb';
    protected $fillable = [
        'user_id',
        'pasien_id',
        'tanggal',
        'nama',
        'umur',
        'nama_suami',
        'nik_alamat',
        'alkon',
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
        'hasil_pemeriksaan',
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
