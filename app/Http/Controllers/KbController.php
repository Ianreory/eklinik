<?php

namespace App\Http\Controllers;

use App\Models\Kb;
use App\Models\Kunjungan;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class KbController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create_kb(Pasien $pasien, Kunjungan $kunjungan)
    {
        $user = Auth::user();
        $kunjungan = Kunjungan::where('pasien_id', $pasien->id)->first();
        return view('create_kb', compact('user', 'pasien', 'kunjungan'));
    }
    public function store_kb(Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $existing_kb = Kb::where('pasien_id', $pasien->id)
            ->where('user_id', $user_id)
            ->first();

        if ($existing_kb == null) {
            $request->validate([
                'tanggal' => 'required',
                'nama' => 'required',
                'umur' => 'required|integer',
                'nik_alamat' => 'required',
                'nama_suami' => 'nullable',
                'alkon' => 'nullable',
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
                'hasil_pemeriksaan' => 'nullable',
            ], [
                'tanggal.required' => 'Tanggal tidak boleh kosong.',
                'nama.required' => 'Nama tidak boleh kosong.',
                'umur.required' => 'Umur tidak boleh kosong.',
                'umur.integer' => 'Umur harus berupa angka.',
                'nik_alamat.required' => 'NIK tidak boleh kosong.',
            ]);

            Kb::create([
                'tanggal' => $request->tanggal,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'nama_suami' => $request->nama_suami,
                'nik_alamat' => $request->nik_alamat,
                'alkon' => $request->alkon,
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
                'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
            ]);
        } else if ($existing_kb !== $pasien_id) {
            $request->validate([
                'tanggal' => 'required',
                'nama' => 'required',
                'umur' => 'required|integer',
                'nik_alamat' => 'required',
                'nama_suami' => 'nullable',
                'alkon' => 'nullable',
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
                'hasil_pemeriksaan' => 'nullable',
            ], [
                'tanggal.required' => 'Tanggal tidak boleh kosong.',
                'nama.required' => 'Nama tidak boleh kosong.',
                'umur.required' => 'Umur tidak boleh kosong.',
                'umur.integer' => 'Umur harus berupa angka.',
                'nik_alamat.required' => 'NIK tidak boleh kosong.',
            ]);
            Kb::create([
                'tanggal' => $request->tanggal,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'nama_suami' => $request->nama_suami,
                'nik_alamat' => $request->nik_alamat,
                'alkon' => $request->alkon,
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
                'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
            ]);
        }
        Alert::success('Hore!', 'Data KB Successfully');
        return Redirect::route('show_kb');
    }
    public function show_kb()
    {
        $kb = Kb::all();
        return view('show_kb', compact('kb'));
    }

    public function delete_kb(Kb $kb)
    {
        $kb->forceDelete();

        // Atur ulang urutan ID
        DB::statement('ALTER TABLE Kb AUTO_INCREMENT = 1');
        alert()->success('Hore!', 'Kunjungan Kb sukses di hapus');
        return Redirect::route("show_kb");
    }

    public function edit_kb(Kb $kb)
    {
        return view('edit_kb', compact('kb'));
    }
    public function update_kb(Kb $kb, Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'umur' => 'required|integer',
            'nik_alamat' => 'required',
            'nama_suami' => 'nullable',
            'alkon' => 'nullable',
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
            'hasil_pemeriksaan' => 'nullable',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong.',
            'nama.required' => 'Nama tidak boleh kosong.',
            'umur.required' => 'Umur tidak boleh kosong.',
            'umur.integer' => 'Umur harus berupa angka.',
            'nik_alamat.required' => 'NIK tidak boleh kosong.',
        ]);

        $kb->update([
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'nama_suami' => $request->nama_suami,
            'nik_alamat' => $request->nik_alamat,
            'alkon' => $request->alkon,
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
            'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
            'user_id' => $user_id,
            'pasien_id' => $request->pasien_id,
        ]);
        toast('Kunjungan KB berhasil di edit!', 'success');
        return redirect()->route('show_kb');
    }
}

