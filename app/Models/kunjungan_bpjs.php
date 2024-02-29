<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kunjungan_bpjs extends Model
{

    use HasFactory;

    protected $table = 'kunjungan_bpjs';

    protected $fillable = [
        'tanggal',
        'no_kartu',
        'nama',
        'tgl_lahir',
        'jenis_kelamin',
        'nomer_telepon',
    ];

    public function bpjs()
    {
        return $this->hasMany(Bpjs::class, 'kunjungan_bpjs_id');
    }

}
