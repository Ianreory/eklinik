<?php

namespace App\Http\Controllers;

use App\Exports\ExportPasien;
use App\Models\Kunjungan;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Umum;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class UmumController extends Controller
{
    public function create_umum(Pasien $pasien, )
    {
        $user = Auth::user();
        return view('create_umum', compact('user', 'pasien'));
    }
    public function store_umum(Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $existing_kunjungan = Umum::where('pasien_id', $pasien->id)
            ->where('user_id', $user_id)
            ->first();

        if ($existing_kunjungan == null) {
            $request->validate([
                'tanggal' => 'required',
                'urut' => 'required',
                'integer',
                'dokumen_medik' => 'required',
                'nama' => 'required',
                'l' => 'required',
                'p' => 'required',
                'no_identitas' => 'required',
                'alamat' => 'required',
                'jenis_kunjungan' => 'required|in:Baru,Ulang',
                'tindak_lanjut' => 'required|in:Dirawat,Dirujuk,Pulang',
                'diagnosis' => 'required',
                'terapi_obat' => 'required',
                'keterangan' => 'required',
            ], [
                'tanggal' => 'Tanggal tidak boleh kosong.',
                'urut.required' => 'Urut tidak boleh kosong.',
                'urut.integer' => 'Urut harus berupa angka.',
                'dokumen_medik' => 'Dokumen tidak boleh kosong.',
                'l' => 'L tidak boleh kosong.',
                'p' => 'P tidak boleh kosong.',
                'no_identitas' => 'No Identitas tidak boleh kosong.',
                'alamat' => 'Alamat tidak boleh kosong.',
                'diagnosis' => 'Diagnosis tidak boleh kosong.',
                'terapi_obat' => 'Terapi Obat tidak boleh kosong.',
                'keterangan' => 'Keterangan Tidak boleh kosong',
            ]);

            Umum::create([
                'tanggal' => $request->tanggal,
                'urut' => $request->urut,
                'dokumen_medik' => $request->dokumen_medik,
                'l' => $request->l,
                'p' => $request->p,
                'nama' => $request->nama,
                'no_identitas' => $request->no_identitas,
                'alamat' => $request->alamat,
                'jenis_kunjungan' => $request->jenis_kunjungan,
                'tindak_lanjut' => $request->tindak_lanjut,
                'diagnosis' => $request->diagnosis,
                'terapi_obat' => $request->terapi_obat,
                'keterangan' => $request->keterangan,
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
            ]);
        } else if ($existing_kunjungan !== $pasien_id) {
            $request->validate([
                'tanggal' => 'required',
                'urut' => 'required',
                'dokumen_medik' => 'required',
                'nama' => 'required',
                'l' => 'required',
                'p' => 'required',
                'no_identitas' => 'required',
                'alamat' => 'required',
                'jenis_kunjungan' => 'required|in:Baru,Ulang',
                'tindak_lanjut' => 'required|in:Dirawat,Dirujuk,Pulang',
                'diagnosis' => 'required',
                'terapi_obat' => 'required',
                'keterangan' => 'required',
            ], [
                'tanggal' => 'Tanggal tidak boleh kosong.',
                'urut' => 'Urut tidak boleh kosong.',
                'dokumen_medik' => 'Dokumen tidak boleh kosong.',
                'l' => 'L tidak boleh kosong.',
                'p' => 'P tidak boleh kosong.',
                'no_identitas' => 'No Identitas tidak boleh kosong.',
                'alamat' => 'Alamat tidak boleh kosong.',
                'diagnosis' => 'Diagnosis tidak boleh kosong.',
                'terapi_obat' => 'Terapi Obat tidak boleh kosong.',
                'keterangan' => 'Keterangan Tidak boleh kosong',
            ]);
            Umum::create([
                'tanggal' => $request->tanggal,
                'urut' => $request->urut,
                'dokumen_medik' => $request->dokumen_medik,
                'l' => $request->l,
                'p' => $request->p,
                'nama' => $request->nama,
                'no_identitas' => $request->no_identitas,
                'alamat' => $request->alamat,
                'jenis_kunjungan' => $request->jenis_kunjungan,
                'tindak_lanjut' => $request->tindak_lanjut,
                'diagnosis' => $request->diagnosis,
                'terapi_obat' => $request->terapi_obat,
                'keterangan' => $request->keterangan,
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
            ]);
        }

        // Add any additional logic or redirects as needed
        Alert::success('Hore!', 'Data Pasien umum Successfully');
        return Redirect::route('index_umum');
    }
    public function index_umum()
    {
        $umum = Umum::all();
        return view('index_umum', compact('umum'));
    }

    public function delete_umum(Umum $umum, Pasien $pasien)
    {
        $umum->forceDelete();

        // Atur ulang urutan ID
        DB::statement('ALTER TABLE umum AUTO_INCREMENT = 1');
        alert()->success('Hore!', 'Kunjungan Umum sukses di hapus');
        // Menggunakan parameter ID umum saat mengarahkan kembali
        return Redirect::route('index_umum');
    }

    public function edit_umum(Umum $umum)
    {
        return view('edit_umum', compact('umum'));
    }
    public function update_umum(Umum $umum, Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;


        $request->validate([
            'tanggal' => 'required',
            'urut' => 'required',
            'integer',
            'dokumen_medik' => 'required',
            'nama' => 'required',
            'l' => 'required',
            'p' => 'required',
            'no_identitas' => 'required',
            'alamat' => 'required',
            'jenis_kunjungan' => 'required|in:Baru,Ulang',
            'tindak_lanjut' => 'required|in:Dirawat,Dirujuk,Pulang',
            'diagnosis' => 'required',
            'terapi_obat' => 'required',
            'keterangan' => 'required',
        ], [
            'tanggal' => 'Tanggal tidak boleh kosong.',
            'urut.required' => 'Urut tidak boleh kosong.',
            'urut.integer' => 'Urut harus berupa angka.',
            'dokumen_medik' => 'Dokumen tidak boleh kosong.',
            'l' => 'L tidak boleh kosong.',
            'p' => 'P tidak boleh kosong.',
            'no_identitas' => 'No Identitas tidak boleh kosong.',
            'alamat' => 'Alamat tidak boleh kosong.',
            'diagnosis' => 'Diagnosis tidak boleh kosong.',
            'terapi_obat' => 'Terapi Obat tidak boleh kosong.',
            'keterangan' => 'Keterangan Tidak boleh kosong',
        ]);

        $umum->update([
            'tanggal' => $request->tanggal,
            'urut' => $request->urut,
            'dokumen_medik' => $request->dokumen_medik,
            'l' => $request->l,
            'p' => $request->p,
            'nama' => $request->nama,
            'no_identitas' => $request->no_identitas,
            'alamat' => $request->alamat,
            'jenis_kunjungan' => $request->jenis_kunjungan,
            'tindak_lanjut' => $request->tindak_lanjut,
            'diagnosis' => $request->diagnosis,
            'terapi_obat' => $request->terapi_obat,
            'keterangan' => $request->keterangan,
            'user_id' => $user_id,
            'pasien_id' => $request->pasien_id,
        ]);
        toast('Kunjungan Umum berhasil di edit!', 'success');
        return redirect()->route('index_umum');
    }


    public function kunjungan()
    {
        return view('surat_kunjungan');
    }

    public function export_umum(Request $request)
    {
        $startDate = $request->input('mulai');
        $endDate = $request->input('sampai');

        return Excel::download(new ExportPasien($startDate, $endDate), 'pasien_umum.xlsx');
    }
}
