<?php

namespace App\Http\Controllers;

use App\Models\bpjs;
use App\Models\kunjungan_bpjs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class BpjsController extends Controller
{
    public function create_bpjs(kunjungan_bpjs $pasien)
    {
        $user = Auth::user();
        return view('create_bpjs', compact('user', 'pasien'));
    }

    public function store_bpjs(kunjungan_bpjs $pasien, Request $request)
    {
        $user_id = Auth::id();
        $kunjungan_bpjs_id = $pasien->id;


        $existing_kunjungan_bpjs = bpjs::where('kunjungan_bpjs_id', $pasien->id)
            ->where('user_id', $user_id)
            ->first();

        if ($existing_kunjungan_bpjs === null) {
            $request->validate([
                'Perawatan' => 'required|in:Rawat jalan,Rawat inap,Promotif preventif',
                'tgl_kunjungan' => 'required|date',
                'keluhan' => 'required',
                'anamnesa' => 'required',
                'makanan' => 'required',
                'udara' => 'required',
                'obat' => 'required',
                'prognosa' => 'required',
                'terapi' => 'required',
                'terapi_non' => 'required',
                'bmhp' => 'required',
                'diagnosis' => 'required',
                'kesadaran' => 'required',
                'suhu' => 'required',
                'tinggi_badan' => 'required|integer',
                'berat_badan' => 'required|integer',
                'lingkar_perut' => 'required|integer',
                'imt' => 'required|integer',
                'sistole' => 'required|integer',
                'diastole' => 'required|integer',
                'respiratory_rate' => 'required|integer',
                'heart_rate' => 'required|integer',
                'tenaga_medis' => 'required',
                'pelayanan' => 'required',
                'statuspulang' => 'required',

            ], [
                'Perawatan.required' => 'Jenis perawatan tidak boleh kosong.',
                'Perawatan.in' => 'Jenis perawatan harus salah satu dari: Rawat jalan, Rawat inap, Promotif preventif.',
                'tgl_kunjungan.required' => 'Tanggal kunjungan tidak boleh kosong.',
                'tgl_kunjungan.date' => 'Tanggal kunjungan harus berupa tanggal.',
                'keluhan.required' => 'Keluhan tidak boleh kosong.',
                'anamnesa.required' => 'Anamnesa tidak boleh kosong.',
                'makanan.required' => 'Makanan tidak boleh kosong.',
                'udara.required' => 'Udara tidak boleh kosong.',
                'integer' => 'Kolom :attribute harus diisi dengan angka.',
                'required' => 'Kolom :attribute wajib diisi.',
            ]);

            bpjs::create([
                'user_id' => $user_id,
                'kunjungan_bpjs_id' => $kunjungan_bpjs_id,
                'Perawatan' => $request->Perawatan,
                'tgl_kunjungan' => $request->tgl_kunjungan,
                'keluhan' => $request->keluhan,
                'anamnesa' => $request->anamnesa,
                'makanan' => $request->makanan,
                'udara' => $request->udara,
                'obat' => $request->obat,
                'prognosa' => $request->prognosa,
                'terapi' => $request->terapi,
                'terapi_non' => $request->terapi_non,
                'bmhp' => $request->bmhp,
                'diagnosis' => $request->diagnosis,
                'kesadaran' => $request->kesadaran,
                'suhu' => $request->suhu,
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
                'lingkar_perut' => $request->lingkar_perut,
                'imt' => $request->imt,
                'sistole' => $request->sistole,
                'diastole' => $request->diastole,
                'respiratory_rate' => $request->respiratory_rate,
                'heart_rate' => $request->heart_rate,
                'tenaga_medis' => $request->tenaga_medis,
                'pelayanan' => $request->pelayanan,
                'statuspulang' => $request->statuspulang,

            ]);
        } else if ($existing_kunjungan_bpjs !== $kunjungan_bpjs_id) {
            $request->validate([
                'Perawatan' => 'required|in:Rawat jalan,Rawat inap,Promotif preventif',
                'tgl_kunjungan' => 'required|date',
                'keluhan' => 'required',
                'anamnesa' => 'required',
                'makanan' => 'required',
                'udara' => 'required',
                'obat' => 'required',
                'prognosa' => 'required',
                'terapi' => 'required',
                'terapi_non' => 'required',
                'bmhp' => 'required',
                'diagnosis' => 'required',
                'kesadaran' => 'required',
                'suhu' => 'required',
                'tinggi_badan' => 'required|integer',
                'berat_badan' => 'required|integer',
                'lingkar_perut' => 'required|integer',
                'imt' => 'required|integer',
                'sistole' => 'required|integer',
                'diastole' => 'required|integer',
                'respiratory_rate' => 'required|integer',
                'heart_rate' => 'required|integer',
                'tenaga_medis' => 'required',
                'pelayanan' => 'required',
                'statuspulang' => 'required',
            ], [
                'Perawatan.required' => 'Jenis perawatan tidak boleh kosong.',
                'Perawatan.in' => 'Jenis perawatan harus salah satu dari: Rawat jalan, Rawat inap, Promotif preventif.',
                'tgl_kunjungan.required' => 'Tanggal kunjungan tidak boleh kosong.',
                'tgl_kunjungan.date' => 'Tanggal kunjungan harus berupa tanggal.',
                'keluhan.required' => 'Keluhan tidak boleh kosong.',
                'anamnesa.required' => 'Anamnesa tidak boleh kosong.',
                'makanan.required' => 'Makanan tidak boleh kosong.',
                'udara.required' => 'Udara tidak boleh kosong.',
                'integer' => 'Kolom :attribute harus diisi dengan angka.',
                'required' => 'Kolom :attribute wajib diisi.',
            ]);
            bpjs::create([
                'user_id' => $user_id,
                'kunjungan_bpjs_id' => $kunjungan_bpjs_id,
                'Perawatan' => $request->Perawatan,
                'tgl_kunjungan' => $request->tgl_kunjungan,
                'keluhan' => $request->keluhan,
                'anamnesa' => $request->anamnesa,
                'makanan' => $request->makanan,
                'udara' => $request->udara,
                'obat' => $request->obat,
                'prognosa' => $request->prognosa,
                'terapi' => $request->terapi,
                'terapi_non' => $request->terapi_non,
                'bmhp' => $request->bmhp,
                'diagnosis' => $request->diagnosis,
                'kesadaran' => $request->kesadaran,
                'suhu' => $request->suhu,
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
                'lingkar_perut' => $request->lingkar_perut,
                'imt' => $request->imt,
                'sistole' => $request->sistole,
                'diastole' => $request->diastole,
                'respiratory_rate' => $request->respiratory_rate,
                'heart_rate' => $request->heart_rate,
                'tenaga_medis' => $request->tenaga_medis,
                'pelayanan' => $request->pelayanan,
                'statuspulang' => $request->statuspulang,
            ]);
        }
        Alert::success('Hore!', 'Data Pasien Successfully');
        return Redirect::route('show_bpjs', ['pasien' => $pasien]);
    }
    public function show_bpjs()
    {
        $bpjs = bpjs::all();
        return view('show_bpjs', compact('bpjs'));
    }

    public function delete_bpjs(bpjs $bpjs)
    {
        $bpjs->forceDelete();

        // Atur ulang urutan ID
        DB::statement('ALTER TABLE bpjs AUTO_INCREMENT = 1');
        alert()->success('Hore!', 'Kunjungan Bpjs sukses di hapus');
        return Redirect::route("show_bpjs");
    }


    public function edit_bpjs(bpjs $bpjs)
    {
        return view('edit_bpjs', compact('bpjs'));
    }

    public function update_bpjs(bpjs $bpjs, Request $request)
    {
        $user_id = Auth::id();
        $kunjungan_bpjs_id = $bpjs->id;

        $request->validate([
            'Perawatan' => 'required|in:Rawat jalan,Rawat inap,Promotif preventif',
            'tgl_kunjungan' => 'required|date',
            'keluhan' => 'required',
            'anamnesa' => 'required',
            'makanan' => 'required',
            'udara' => 'required',
            'obat' => 'required',
            'prognosa' => 'required',
            'terapi' => 'required',
            'terapi_non' => 'required',
            'bmhp' => 'required',
            'diagnosis' => 'required',
            'kesadaran' => 'required',
            'suhu' => 'required',
            'tinggi_badan' => 'required|integer',
            'berat_badan' => 'required|integer',
            'lingkar_perut' => 'required|integer',
            'imt' => 'required|integer',
            'sistole' => 'required|integer',
            'diastole' => 'required|integer',
            'respiratory_rate' => 'required|integer',
            'heart_rate' => 'required|integer',
            'tenaga_medis' => 'required',
            'pelayanan' => 'required',
            'statuspulang' => 'required',

        ], [
            'Perawatan.required' => 'Jenis perawatan tidak boleh kosong.',
            'Perawatan.in' => 'Jenis perawatan harus salah satu dari: Rawat jalan, Rawat inap, Promotif preventif.',
            'tgl_kunjungan.required' => 'Tanggal kunjungan tidak boleh kosong.',
            'tgl_kunjungan.date' => 'Tanggal kunjungan harus berupa tanggal.',
            'keluhan.required' => 'Keluhan tidak boleh kosong.',
            'anamnesa.required' => 'Anamnesa tidak boleh kosong.',
            'makanan.required' => 'Makanan tidak boleh kosong.',
            'udara.required' => 'Udara tidak boleh kosong.',
            'integer' => 'Kolom :attribute harus diisi dengan angka.',
            'required' => 'Kolom :attribute wajib diisi.',
        ]);

        $bpjs->update([
            'user_id' => $user_id,
            'kunjungan_bpjs_id' => $request->kunjungan_bpjs_id,
            'Perawatan' => $request->Perawatan,
            'tgl_kunjungan' => $request->tgl_kunjungan,
            'keluhan' => $request->keluhan,
            'anamnesa' => $request->anamnesa,
            'makanan' => $request->makanan,
            'udara' => $request->udara,
            'obat' => $request->obat,
            'prognosa' => $request->prognosa,
            'terapi' => $request->terapi,
            'terapi_non' => $request->terapi_non,
            'bmhp' => $request->bmhp,
            'diagnosis' => $request->diagnosis,
            'kesadaran' => $request->kesadaran,
            'suhu' => $request->suhu,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'lingkar_perut' => $request->lingkar_perut,
            'imt' => $request->imt,
            'sistole' => $request->sistole,
            'diastole' => $request->diastole,
            'respiratory_rate' => $request->respiratory_rate,
            'heart_rate' => $request->heart_rate,
            'tenaga_medis' => $request->tenaga_medis,
            'pelayanan' => $request->pelayanan,
            'statuspulang' => $request->statuspulang,

        ]);
        toast('Kunjungan BPJS berhasil di edit!', 'success');
        return redirect()->route('show_bpjs');
    }
}
