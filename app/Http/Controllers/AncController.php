<?php

namespace App\Http\Controllers;

use App\Models\Anc;
use App\Models\Kunjungananc;
use App\Models\Pasien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class AncController extends Controller
{
    public function create_anc(Pasien $pasien)
    {
        $user = Auth::user();
        return view('create_anc', compact('user', 'pasien'));
    }
    public function store_anc(Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $existing_Anc = Anc::where('pasien_id', $pasien->id)
            ->where('user_id', $user_id)
            ->first();

        if ($existing_Anc == null) {
            $request->validate([
                'pasien_id' => 'unique:anc,pasien_id',
                'nim' => 'required|integer',

                'nama_suami' => 'required|string',
                'nik' => 'required|integer',
                'no_kk' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required',
                'status' => 'required|string',
                'statustt' => 'required|string',
                'hpht' => 'nullable',
                'tp' => 'nullable',
                'tb' => 'nullable',
                'no_bpjs' => 'nullable',
                'namm_ibu' => 'nullable|string',
            ], [

                'nim.required' => 'NIM tidak boleh kosong.',
                'nim.integer' => 'NIM harus berupa angka.',

                'nama_suami.required' => 'Nama Suami tidak boleh kosong.',
                'nama_suami.string' => 'Nama Suami harus berupa teks.',

                'nik.required' => 'NIK tidak boleh kosong.',
                'nik.integer' => 'NIK harus berupa angka.',

                'no_kk.required' => 'Nomor KK tidak boleh kosong.',


                'alamat.required' => 'Alamat tidak boleh kosong.',

                'no_hp.required' => 'Nomor HP tidak boleh kosong.',

                'status.required' => 'Status tidak boleh kosong.',
                'status.string' => 'Status harus berupa teks.',

                'statustt.required' => 'Status Imunisasi TT tidak boleh kosong.',

            ]);

            Anc::create([
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
                'namaibu' => $request->namaibu,
                'nim' => $request->nim,
                'nama_suami' => $request->nama_suami,
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'status' => $request->status,
                'statustt' => $request->statustt,
                'hpht' => $request->hpht,
                'tp' => $request->tp,
                'tb' => $request->tb,
                'no_bpjs' => $request->no_bpjs,
                'namm_ibu' => $request->namm_ibu,
            ]);
        } else if ($existing_Anc !== $pasien_id) {
            $request->validate([
                'pasien_id' => 'unique:anc,pasien_id',
                'nim' => 'required|integer',
                'nama_suami' => 'required|string',
                'nik' => 'required|integer',
                'no_kk' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required',
                'status' => 'required|string',
                'statustt' => 'required|string',
                'hpht' => 'nullable',
                'tp' => 'nullable',
                'tb' => 'nullable',
                'no_bpjs' => 'nullable',
                'namm_ibu' => 'nullable|string',

            ]);

            Anc::create([
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
                'namaibu' => $request->namaibu,
                'nim' => $request->nim,
                'nama_suami' => $request->nama_suami,
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'status' => $request->status,
                'statustt' => $request->statustt,
                'hpht' => $request->hpht,
                'tp' => $request->tp,
                'tb' => $request->tb,
                'no_bpjs' => $request->no_bpjs,
                'namm_ibu' => $request->namm_ibu,
            ]);
        }
        Alert::success('Hore!', 'Data Anc Successfully');
        return Redirect::route('show_anc');
    }
    public function show_anc()
    {
        $anc = Anc::all();
        return view('show_anc', compact('anc'));
    }

    public function delete_anc(Anc $pasien)
    {
        $pasien->forceDelete();

        // Atur ulang urutan ID
        DB::statement('ALTER TABLE Anc AUTO_INCREMENT = 1');
        alert()->success('Hore!', 'Data anc berhasil di Hapus.');
        return Redirect::route("show_anc");
    }
    public function show_anc_utama(Anc $anc, Kunjungananc $kunjungananc)
    {
        $kunjungananc = Kunjungananc::where('anc_id', $anc->id)->get();
        return view('show_anc_utama', compact('anc', 'kunjungananc'));
    }
    public function edit_anc(Anc $anc, Pasien $pasien)
    {
        return view('edit_anc', compact('anc', 'pasien'));
    }
    public function update_anc(Anc $anc, Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $request->validate([
            'namaibu' => 'required',
            'nim' => 'required|integer',
            'nama_suami' => 'required|string',
            'nik' => 'required|integer',
            'no_kk' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'status' => 'required|string',
            'statustt' => 'required|string',
            'hpht' => 'nullable',
            'tp' => 'nullable',
            'tb' => 'nullable',
            'no_bpjs' => 'nullable',
            'namm_ibu' => 'nullable|string',
        ], [


            'nim.required' => 'NIM tidak boleh kosong.',
            'nim.integer' => 'NIM harus berupa angka.',

            'nama_suami.required' => 'Nama Suami tidak boleh kosong.',
            'nama_suami.string' => 'Nama Suami harus berupa teks.',

            'nik.required' => 'NIK tidak boleh kosong.',
            'nik.integer' => 'NIK harus berupa angka.',

            'no_kk.required' => 'Nomor KK tidak boleh kosong.',


            'alamat.required' => 'Alamat tidak boleh kosong.',

            'no_hp.required' => 'Nomor HP tidak boleh kosong.',

            'status.required' => 'Status tidak boleh kosong.',
            'status.string' => 'Status harus berupa teks.',

            'statustt.required' => 'Status Imunisasi TT tidak boleh kosong.',

        ]);
        $anc->update([
            'user_id' => $user_id,
            'pasien_id' => $request->pasien_id,
            'namaibu' => $request->namaibu,
            'nim' => $request->nim,
            'nama_suami' => $request->nama_suami,
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'status' => $request->status,
            'statustt' => $request->statustt,
            'hpht' => $request->hpht,
            'tp' => $request->tp,
            'tb' => $request->tb,
            'no_bpjs' => $request->no_bpjs,
            'namm_ibu' => $request->namm_ibu,

        ]);

        toast('Kunjungan ANC berhasil di edit!', 'success');
        return redirect()->route('show_anc');
    }

}



