<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $fillable = [
        'id',
        'tanggal_pendaftaran',
        'nama',
        'jenis_kelamin',
        'alamat',
        'nomer_telepon'
    ];

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class);
    }
    public function umum()
    {
        return $this->hasMany(Umum::class);
    }
    public function labor()
    {
        return $this->hasMany(Labor::class);
    }
    public function kb()
    {
        return $this->hasMany(Kb::class);
    }
    public function inc()
    {
        return $this->hasMany(Inc::class);
    }
    public function anc()
    {
        return $this->hasMany(Anc::class);
    }
    public function persalinan()
    {
        return $this->hasMany(Persalinan::class);
    }

}
