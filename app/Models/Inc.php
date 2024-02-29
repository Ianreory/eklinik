<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inc extends Model
{
    use HasFactory;

    protected $table = 'inc';
    protected $fillable = [
        'user_id',
        'pasien_id',
        'tanggal',
        'namaibu',
        'namasuami',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'bb',
        'pb',
        'lk',
        'anak_ke',
        'jenis_partus',
        'imd',
        'penolongan',
        'keterangan',
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
