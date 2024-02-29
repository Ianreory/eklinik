<?php

namespace App\Http\Controllers;

use App\Models\Anc;
use App\Models\bpjs;
use App\Models\Kb;
use App\Models\kunjungan_bpjs;
use App\Models\Kunjungananc;
use App\Models\Labor;
use App\Models\Pasien;
use App\Models\Persalinan;
use App\Models\Umum;
use App\Models\Inc;
use Illuminate\Http\Request;

class PasienkunjunganController extends Controller
{
    public function showpasien(Pasien $pasien, Kb $kb)
    {
        $kb = Kb::where('pasien_id', $pasien->id)->count();
        $labor = Labor::where('pasien_id', $pasien->id)->count();
        $umum = Umum::where('pasien_id', $pasien->id)->count();
        $anc = Anc::where('pasien_id', $pasien->id)->count();
        $inc = Inc::where('pasien_id', $pasien->id)->count();
        $persalinan = Persalinan::where('pasien_id', $pasien->id)->count();
        return view('show_pasienkunjungan', compact('pasien', 'kb', 'labor', 'umum', 'anc', 'inc', 'persalinan'));
    }

    //bpjs
    public function show_pasienkunjunganbpjs(kunjungan_bpjs $kunjungan_bpjs, bpjs $bpjs)
    {
        $bpjs = bpjs::where('kunjungan_bpjs_id', $kunjungan_bpjs->id)
            ->latest('tgl_kunjungan')
            ->get();
        return view('show_pasienkunjunganbpjs', compact('bpjs', 'kunjungan_bpjs'));
    }
    public function show_kunjungan_umum(Umum $umum, Pasien $pasien)
    {
        $umum = Umum::where('pasien_id', $pasien->id)
            ->latest('tanggal')
            ->get();
        return view('show_kunjungan_umum', compact('umum', 'pasien'));
    }
    public function surat_umum(Umum $umum, Pasien $pasien)
    {
        return view('surat_pendaftaran', compact('umum', 'pasien'));
    }
    public function show_kunjungan_labor(Labor $labor, Pasien $pasien)
    {
        $labor = Labor::where('pasien_id', $pasien->id)
            ->latest('tanggal')
            ->get();
        return view('show_kunjungan_labor', compact('labor', 'pasien'));
    }
    public function surat_labor(Labor $labor, Pasien $pasien)
    {
        return view('surat_labor', compact('labor', 'pasien'));
    }
    public function show_kunjungan_kb(Kb $kb, Pasien $pasien)
    {
        $kb = Kb::where('pasien_id', $pasien->id)
            ->latest('tanggal')
            ->get();
        return view('show_kunjungan_kb', compact('kb', 'pasien'));
    }
    public function surat_kb(Kb $kb, Pasien $pasien)
    {
        return view('surat_kb', compact('kb', 'pasien'));
    }
    public function show_kunjungan_anc(Anc $anc, Pasien $pasien)
    {
        $anc = Anc::where('pasien_id', $pasien->id)->get();
        return view('show_kunjungan_anc', compact('anc', 'pasien'));
    }

    public function show_catatan_anc(Anc $anc, Kunjungananc $kunjungananc)
    {
        $kunjungananc = Kunjungananc::where('anc_id', $anc->id)->get();
        return view('show_catatan_anc', compact('anc', 'kunjungananc'));
    }

    public function show_kunjungan_inc(Inc $inc, Pasien $pasien)
    {
        $inc = Inc::where('pasien_id', $pasien->id)
            ->latest('tanggal')
            ->get();
        return view('show_kunjungan_inc', compact('inc', 'pasien'));
    }
    public function surat_inc(Inc $inc, Pasien $pasien)
    {
        return view('surat_inc', compact('inc', 'pasien'));
    }
    public function show_kunjungan_persalinan(Persalinan $persalinan, Pasien $pasien)
    {
        $persalinan = Persalinan::where('pasien_id', $pasien->id)->get();
        return view('show_kunjungan_persalinan', compact('persalinan', 'pasien'));
    }
    public function surat_persalinan(Persalinan $persalinan, Pasien $pasien)
    {
        return view('surat_persalinan', compact('persalinan', 'pasien'));
    }

    public function surat_bpjs(bpjs $bpjs, kunjungan_bpjs $kunjungan_bpjs)
    {
        return view('surat_bpjs', compact('bpjs', 'kunjungan_bpjs'));
    }
}
