<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';
    protected $fillable = [
        'id',
        'tgl_kunjungan',
        'pasien_id',
        'user_id',
        'jenis_kunjungan',
    ];
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
