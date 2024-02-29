<?php

namespace App\Http\Controllers;

use App\Models\Anc;
use App\Models\Kunjungananc;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class KunjunganancController extends Controller
{
    public function create_kunjungananc(Anc $anc)
    {
        return view('create_kunjungananc', compact('anc'));
    }

    public function store_kunjungananc(Anc $anc, Request $request)
    {
        $anc_id = $anc->id;
        $existing_anc = Anc::where('id', $anc->id)->first();


        if ($existing_anc == null) {
            $request->validate([
                'tanggal_periksa' => 'nullable|date',
                'keluhan' => 'nullable|string',
                'usia_kehamilan' => 'nullable',
                'lila' => 'nullable',
                'bb' => 'nullable',
                'td' => 'nullable',
                'tfu' => 'nullable',
                'djj' => 'nullable',
                'keterangan' => 'nullable',
            ]);

            Kunjungananc::create([
                'anc_id' => $anc_id,
                'tanggal_periksa' => $request->tanggal_periksa,
                'keluhan' => $request->keluhan,
                'usia_kehamilan' => $request->usia_kehamilan,
                'lila' => $request->lila,
                'bb' => $request->bb,
                'td' => $request->td,
                'tfu' => $request->tfu,
                'djj' => $request->djj,
                'keterangan' => $request->keterangan,
            ]);
        } else if ($existing_anc !== $anc_id) {
            $request->validate([
                'tanggal_periksa' => 'nullable|date',
                'keluhan' => 'nullable|string',
                'usia_kehamilan' => 'nullable',
                'lila' => 'nullable',
                'bb' => 'nullable',
                'td' => 'nullable',
                'tfu' => 'nullable',
                'djj' => 'nullable',
                'keterangan' => 'nullable',
            ]);

            Kunjungananc::create([
                'anc_id' => $anc_id,
                'tanggal_periksa' => $request->tanggal_periksa,
                'keluhan' => $request->keluhan,
                'usia_kehamilan' => $request->usia_kehamilan,
                'lila' => $request->lila,
                'bb' => $request->bb,
                'td' => $request->td,
                'tfu' => $request->tfu,
                'djj' => $request->djj,
                'keterangan' => $request->keterangan,
            ]);
        }
        Alert::success('Hore!', 'Data Kunjungan Anc Successfully');
        return Redirect()->route('show_anc_utama', ['anc' => $anc_id]);
    }
    public function delete_anc_utama(Kunjungananc $kunjungananc)
    {
        $kunjungananc->forceDelete();

        // Atur ulang urutan ID
        DB::statement('ALTER TABLE Kunjungananc AUTO_INCREMENT = 1');
        alert()->success('Hore!', 'Data Kunjungan Anc berhasil di Hapus.');
        return Redirect::route('show_catatan_anc', ['anc' => $kunjungananc]);
    }
    public function edit_kunjungananc(Kunjungananc $kunjungananc)
    {
        return view('edit_kunjungananc', compact('kunjungananc'));
    }

    public function update_kunjungananc(Kunjungananc $kunjungananc, Anc $anc, Request $request)
    {
        $user_id = Auth::id();


        $request->validate([
            'tanggal_periksa' => 'nullable|date',
            'keluhan' => 'nullable|string',
            'usia_kehamilan' => 'nullable',
            'lila' => 'nullable',
            'bb' => 'nullable',
            'td' => 'nullable',
            'tfu' => 'nullable',
            'djj' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        $kunjungananc->update([
            'anc_id' => $request->anc_id,
            'tanggal_periksa' => $request->tanggal_periksa,
            'keluhan' => $request->keluhan,
            'usia_kehamilan' => $request->usia_kehamilan,
            'lila' => $request->lila,
            'bb' => $request->bb,
            'td' => $request->td,
            'tfu' => $request->tfu,
            'djj' => $request->djj,
            'keterangan' => $request->keterangan,
        ]);
        toast('Kunjungan Umum berhasil di edit!', 'success');
        return redirect()->route('show_catatan_anc', ['anc' => $kunjungananc]);
    }


}



