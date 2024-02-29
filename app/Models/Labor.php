<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    use HasFactory;

    protected $table = 'labor';
    protected $fillable = [
        'user_id',
        'pasien_id',
        'tanggal',
        'nama',
        'umur',
        'nik',
        'T_D',
        'pols',
        'glu',
        'khd',
        'urid',
        'hd',
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
