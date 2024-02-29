<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Persalinan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class PersalinanController extends Controller
{
    public function create_persalinan(Pasien $pasien)
    {
        $user = Auth::user();
        return view('create_persalinan', compact('user', 'pasien'));
    }
    public function store_persalinan(Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $existing_persalinan = Persalinan::where('pasien_id', $pasien->id)
            ->where('user_id', $user_id)
            ->first();

        if ($existing_persalinan == null) {
            $request->validate([
                'nik_ibu' => 'required|integer',
                'alamat' => 'required',
                'sumber_pembiayaan' => 'required',
                'usia_ibu' => 'required|integer',
                'status_gpa' => 'nullable',
                'jarak' => 'nullable',
                'taksiran' => 'nullable',
                'tb' => 'nullable',
                'lila' => 'nullable',
                'status_imunisasi' => 'nullable',
                'injeksi_td' => 'nullable',
                'skrining' => 'nullable',
                'januari' => 'nullable',
                'februari' => 'nullable',
                'maret' => 'nullable',
                'april' => 'nullable',
                'mei' => 'nullable',
                'juni' => 'nullable',
                'juli' => 'nullable',
                'agustus' => 'nullable',
                'september' => 'nullable',
                'oktober' => 'nullable',
                'november' => 'nullable',
                'desember' => 'nullable',
                'tgl_lahir' => 'nullable|date',
                'kurang_dari' => 'nullable',
                'lebih_dari' => 'nullable',
                'cara_persalinan' => 'nullable',
            ], [
                'nik_ibu.required' => 'Nik Ibu tidak boleh kosong.',
                'alamat.required' => 'Alamat Suami tidak boleh kosong.',
                'sumber_pembiayaan.required' => 'Sumber pembiayaan tidak boleh kosong.',
                'usia_ibu.required' => 'Usia Ibu tidak boleh kosong.',
                'usia.integer' => 'Usia harus berupa angka.',
            ]);

            Persalinan::create([
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
                'nama_ibu' => $request->nama_ibu,
                'nik_ibu' => $request->nik_ibu,
                'alamat' => $request->alamat,
                'sumber_pembiayaan' => $request->sumber_pembiayaan,
                'usia_ibu' => $request->usia_ibu,
                'status_gpa' => $request->status_gpa,
                'jarak' => $request->jarak,
                'taksiran' => $request->taksiran,
                'tb' => $request->tb,
                'lila' => $request->lila,
                'status_imunisasi' => $request->status_imunisasi,
                'injeksi_td' => $request->injeksi_td,
                'skrining' => $request->skrining,
                'januari' => $request->januari,
                'februari' => $request->februari,
                'maret' => $request->maret,
                'april' => $request->april,
                'mei' => $request->mei,
                'juni' => $request->juni,
                'juli' => $request->juli,
                'agustus' => $request->agustus,
                'september' => $request->september,
                'oktober' => $request->oktober,
                'november' => $request->november,
                'desember' => $request->desember,
                'tgl_lahir' => $request->tgl_lahir,
                'kurang_dari' => $request->kurang_dari,
                'lebih_dari' => $request->lebih_dari,
                'cara_persalinan' => $request->cara_persalinan,
            ]);
        } else if ($existing_persalinan !== $pasien_id) {
            $request->validate([
                'nik_ibu' => 'required|integer',
                'alamat' => 'required',
                'sumber_pembiayaan' => 'required',
                'usia_ibu' => 'required|integer',
                'status_gpa' => 'nullable',
                'jarak' => 'nullable',
                'taksiran' => 'nullable',
                'tb' => 'nullable',
                'lila' => 'nullable',
                'status_imunisasi' => 'nullable',
                'injeksi_td' => 'nullable',
                'skrining' => 'nullable',
                'januari' => 'nullable',
                'februari' => 'nullable',
                'maret' => 'nullable',
                'april' => 'nullable',
                'mei' => 'nullable',
                'juni' => 'nullable',
                'juli' => 'nullable',
                'agustus' => 'nullable',
                'september' => 'nullable',
                'oktober' => 'nullable',
                'november' => 'nullable',
                'desember' => 'nullable',
                'tgl_lahir' => 'nullable|date',
                'kurang_dari' => 'nullable',
                'lebih_dari' => 'nullable',
                'cara_persalinan' => 'nullable',
            ], [
                'nik_ibu.required' => 'Nik Ibu tidak boleh kosong.',
                'alamat.required' => 'Alamat Suami tidak boleh kosong.',
                'sumber_pembiayaan.required' => 'Sumber pembiayaan tidak boleh kosong.',
                'usia_ibu.required' => 'Usia Ibu tidak boleh kosong.',
                'usia.integer' => 'Usia harus berupa angka.',
            ]);

            Persalinan::create([
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
                'nama_ibu' => $request->nama_ibu,
                'nik_ibu' => $request->nik_ibu,
                'alamat' => $request->alamat,
                'sumber_pembiayaan' => $request->sumber_pembiayaan,
                'usia_ibu' => $request->usia_ibu,
                'status_gpa' => $request->status_gpa,
                'jarak' => $request->jarak,
                'taksiran' => $request->taksiran,
                'tb' => $request->tb,
                'lila' => $request->lila,
                'status_imunisasi' => $request->status_imunisasi,
                'injeksi_td' => $request->injeksi_td,
                'skrining' => $request->skrining,
                'januari' => $request->januari,
                'februari' => $request->februari,
                'maret' => $request->maret,
                'april' => $request->april,
                'mei' => $request->mei,
                'juni' => $request->juni,
                'juli' => $request->juli,
                'agustus' => $request->agustus,
                'september' => $request->september,
                'oktober' => $request->oktober,
                'november' => $request->november,
                'desember' => $request->desember,
                'tgl_lahir' => $request->tgl_lahir,
                'kurang_dari' => $request->kurang_dari,
                'lebih_dari' => $request->lebih_dari,
                'cara_persalinan' => $request->cara_persalinan,
            ]);
        }
        Alert::success('Hore!', 'Data Persalinan Successfully');
        return Redirect::route('show_persalinan');
    }
    public function show_persalinan()
    {
        $persalinan = Persalinan::all();
        return view('show_persalinan', compact('persalinan'));
    }
    public function delete_persalinan(Persalinan $persalinan)
    {
        $persalinan->forceDelete();

        // Atur ulang urutan ID
        DB::statement('ALTER TABLE Persalinan AUTO_INCREMENT = 1');
        alert()->success('Hore!', 'Data Persaliana berhasil di hapus');
        return Redirect::route('show_persalinan');
    }

    public function edit_persalinan(Persalinan $persalinan, Pasien $pasien)
    {
        return view('edit_persalinan', compact('persalinan', 'pasien'));
    }
    public function update_persalinan(Persalinan $persalinan, Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $request->validate([
            'nik_ibu' => 'required|integer',
            'alamat' => 'required',
            'sumber_pembiayaan' => 'required',
            'usia_ibu' => 'required|integer',
            'status_gpa' => 'nullable',
            'jarak' => 'nullable',
            'taksiran' => 'nullable',
            'tb' => 'nullable',
            'lila' => 'nullable',
            'status_imunisasi' => 'nullable',
            'injeksi_td' => 'nullable',
            'skrining' => 'nullable',
            'januari' => 'nullable',
            'februari' => 'nullable',
            'maret' => 'nullable',
            'april' => 'nullable',
            'mei' => 'nullable',
            'juni' => 'nullable',
            'juli' => 'nullable',
            'agustus' => 'nullable',
            'september' => 'nullable',
            'oktober' => 'nullable',
            'november' => 'nullable',
            'desember' => 'nullable',
            'tgl_lahir' => 'nullable|date',
            'kurang_dari' => 'nullable',
            'lebih_dari' => 'nullable',
            'cara_persalinan' => 'nullable',
        ], [
            'nik_ibu.required' => 'Nik Ibu tidak boleh kosong.',
            'alamat.required' => 'Alamat Suami tidak boleh kosong.',
            'sumber_pembiayaan.required' => 'Sumber pembiayaan tidak boleh kosong.',
            'usia_ibu.required' => 'Usia Ibu tidak boleh kosong.',
            'usia.integer' => 'Usia harus berupa angka.',
        ]);
        $persalinan->update([
            'user_id' => $user_id,
            'pasien_id' => $request->pasien_id,
            'nama_ibu' => $request->nama_ibu,
            'nik_ibu' => $request->nik_ibu,
            'alamat' => $request->alamat,
            'sumber_pembiayaan' => $request->sumber_pembiayaan,
            'usia_ibu' => $request->usia_ibu,
            'status_gpa' => $request->status_gpa,
            'jarak' => $request->jarak,
            'taksiran' => $request->taksiran,
            'tb' => $request->tb,
            'lila' => $request->lila,
            'status_imunisasi' => $request->status_imunisasi,
            'injeksi_td' => $request->injeksi_td,
            'skrining' => $request->skrining,
            'januari' => $request->januari,
            'februari' => $request->februari,
            'maret' => $request->maret,
            'april' => $request->april,
            'mei' => $request->mei,
            'juni' => $request->juni,
            'juli' => $request->juli,
            'agustus' => $request->agustus,
            'september' => $request->september,
            'oktober' => $request->oktober,
            'november' => $request->november,
            'desember' => $request->desember,
            'tgl_lahir' => $request->tgl_lahir,
            'kurang_dari' => $request->kurang_dari,
            'lebih_dari' => $request->lebih_dari,
            'cara_persalinan' => $request->cara_persalinan,

        ]);

        toast('Kunjungan ANC berhasil di edit!', 'success');
        return redirect()->route('show_persalinan');
    }
}


