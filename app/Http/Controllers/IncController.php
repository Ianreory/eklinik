<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Inc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class IncController extends Controller
{
    public function create_inc(Pasien $pasien)
    {
        $user = Auth::user();
        return view('create_inc', compact('user', 'pasien'));
    }
    public function store_inc(Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $existing_Inc = Inc::where('pasien_id', $pasien->id)
            ->where('user_id', $user_id)
            ->first();

        if ($existing_Inc === null) {
            $request->validate([
                'tanggal' => 'required',
                'namaibu' => 'required',
                'namasuami' => 'required',
                'alamat' => 'required',
                'tanggal_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'bb' => 'nullable',
                'pb' => 'nullable',
                'lk' => 'nullable',
                'anak_ke' => 'nullable',
                'jenis_partus' => 'nullable',
                'imd' => 'nullable',
                'penolongan' => 'nullable',
                'keterangan' => 'nullable',
            ], [
                'tanggal.required' => 'Tanggal tidak boleh kosong.',
                'namaibu.required' => 'namaibu Suami tidak boleh kosong.',
                'namasuami.required' => 'namasuami tidak boleh kosong.',
                'alamat.required' => 'alamat KK tidak boleh kosong.',
                'tanggal_lahir.required' => 'tanggal_lahir tidak boleh kosong.',
            ]);

            Inc::create([
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
                'tanggal' => $request->tanggal,
                'namaibu' => $request->namaibu,
                'namasuami' => $request->namasuami,
                'alamat' => $request->alamat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'bb' => $request->bb,
                'pb' => $request->pb,
                'lk' => $request->lk,
                'anak_ke' => $request->anak_ke,
                'jenis_partus' => $request->jenis_partus,
                'imd' => $request->imd,
                'penolongan' => $request->penolongan,
                'keterangan' => $request->keterangan,
            ]);
        } else if ($existing_Inc !== $pasien_id) {
            $request->validate([
                'tanggal' => 'required',
                'namaibu' => 'required',
                'namasuami' => 'required',
                'alamat' => 'required',
                'tanggal_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'bb' => 'nullable',
                'pb' => 'nullable',
                'lk' => 'nullable',
                'anak_ke' => 'nullable',
                'jenis_partus' => 'nullable',
                'imd' => 'nullable',
                'penolongan' => 'nullable',
                'keterangan' => 'nullable',
            ], [
                'tanggal.required' => 'Tanggal tidak boleh kosong.',
                'namaibu.required' => 'namaibu Suami tidak boleh kosong.',
                'namasuami.required' => 'namasuami tidak boleh kosong.',
                'alamat.required' => 'alamat KK tidak boleh kosong.',
                'tanggal_lahir.required' => 'tanggal_lahir tidak boleh kosong.',
            ]);
            Inc::create([
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
                'tanggal' => $request->tanggal,
                'namaibu' => $request->namaibu,
                'namasuami' => $request->namasuami,
                'alamat' => $request->alamat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'bb' => $request->bb,
                'pb' => $request->pb,
                'lk' => $request->lk,
                'anak_ke' => $request->anak_ke,
                'jenis_partus' => $request->jenis_partus,
                'imd' => $request->imd,
                'penolongan' => $request->penolongan,
                'keterangan' => $request->keterangan,
            ]);
        }
        Alert::success('Hore!', 'Data Inc Successfully');
        return Redirect::route('show_inc');
    }
    public function show_inc()
    {
        $inc = Inc::all();
        return view('show_inc', compact('inc'));
    }
    public function delete_inc(Inc $pasien)
    {
        $pasien->forceDelete();

        // Atur ulang urutan ID
        DB::statement('ALTER TABLE Inc AUTO_INCREMENT = 1');
        alert()->success('Hore!', 'Data Inc berhasil di  hapus');
        return Redirect::route("show_inc");
    }
    public function edit_inc(Inc $inc)
    {
        return view('edit_inc', compact('inc'));
    }

    public function update_inc(Inc $inc, Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;


        $request->validate([
            'tanggal' => 'required',
            'namaibu' => 'required',
            'namasuami' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'bb' => 'nullable',
            'pb' => 'nullable',
            'lk' => 'nullable',
            'anak_ke' => 'nullable',
            'jenis_partus' => 'nullable',
            'imd' => 'nullable',
            'penolongan' => 'nullable',
            'keterangan' => 'nullable',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong.',
            'namaibu.required' => 'namaibu Suami tidak boleh kosong.',
            'namasuami.required' => 'namasuami tidak boleh kosong.',
            'alamat.required' => 'alamat KK tidak boleh kosong.',
            'tanggal_lahir.required' => 'tanggal_lahir tidak boleh kosong.',
        ]);

        $inc->update([
            'user_id' => $user_id,
            'pasien_id' => $request->pasien_id,
            'tanggal' => $request->tanggal,
            'namaibu' => $request->namaibu,
            'namasuami' => $request->namasuami,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'bb' => $request->bb,
            'pb' => $request->pb,
            'lk' => $request->lk,
            'anak_ke' => $request->anak_ke,
            'jenis_partus' => $request->jenis_partus,
            'imd' => $request->imd,
            'penolongan' => $request->penolongan,
            'keterangan' => $request->keterangan,
        ]);
        toast('Kunjungan Inc berhasil di edit!', 'success');
        return redirect()->route('show_inc');
    }
}

