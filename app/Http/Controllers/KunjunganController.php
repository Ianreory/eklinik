<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class KunjunganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create_kunjungan(Pasien $pasien)
    {
        $user = Auth::user();
        return view('create_kunjungan', compact('user', 'pasien'));
    }

    public function store_kunjungan(Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $existing_kunjungan = Kunjungan::where('pasien_id', $pasien->id)
            ->where('user_id', $user_id)
            ->first();

        if ($existing_kunjungan == null) {
            $request->validate([
                'tgl_kunjungan' => 'required',
                'jenis_kunjungan' => 'required|max:255',
            ]);

            Kunjungan::create([
                'tgl_kunjungan' => $request->tgl_kunjungan,
                'jenis_kunjungan' => $request->jenis_kunjungan,
                'user_id' => $user_id,
                'pasien_id' => $pasien->id,
            ]);
        } else if ($existing_kunjungan !== $pasien_id) {
            $request->validate([
                'tgl_kunjungan' => 'required',
                'jenis_kunjungan' => 'required|max:255'
            ]);
            Kunjungan::create([
                'tgl_kunjungan' => $request->tgl_kunjungan,
                'jenis_kunjungan' => $request->jenis_kunjungan,
                'user_id' => $user_id,
                'pasien_id' => $pasien->id,
            ]);
        }

        $jenis_kunjungan = $request->jenis_kunjungan;

        if ($jenis_kunjungan == "umum") {
            return Redirect::route('create_umum', compact('pasien'));
        } elseif ($jenis_kunjungan == "kb") {
            return Redirect::route('create_kb', compact('pasien'));
        } elseif ($jenis_kunjungan == "labor") {
            return Redirect::route('create_labor', compact('pasien'));
        } elseif ($jenis_kunjungan == "inc") {
            return Redirect::route('create_inc', compact('pasien'));
        } elseif ($jenis_kunjungan == "anc") {
            return Redirect::route('create_anc', compact('pasien'));
        } elseif ($jenis_kunjungan == "persalinan") {
            return Redirect::route('create_persalinan', compact('pasien'));
        }
    }

    public function show_kunjungan()
    {
        $kunjungan = Kunjungan::all();
        return view('show_kunjungan', compact('kunjungan'));
    }

}
