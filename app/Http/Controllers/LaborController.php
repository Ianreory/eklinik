<?php

namespace App\Http\Controllers;

use App\Models\Labor;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class LaborController extends Controller
{
    public function create_labor(Pasien $pasien)
    {
        $user = Auth::user();
        return view('create_labor', compact('user', 'pasien'));
    }
    public function store_labor(Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $existing_labor = Labor::where('pasien_id', $pasien->id)
            ->where('user_id', $user_id)
            ->first();

        if ($existing_labor == null) {
            $request->validate([
                'tanggal' => 'required',
                'nama' => 'required',
                'umur' => 'required|integer',
                'nik' => 'required',
                'T_D' => 'nullable',
                'pols' => 'nullable',
                'glu' => 'nullable',
                'khd' => 'nullable',
                'urid' => 'nullable',
                'hd' => 'nullable',
                'keterangan' => 'nullable',
            ], [
                'tanggal.required' => 'Tanggal tidak boleh kosong.',
                'nama.required' => 'Nama tidak boleh kosong.',
                'umur.required' => 'Umur tidak boleh kosong.',
                'umur.integer' => 'Umur harus berupa angka.',
                'nik.required' => 'Nik tidak boleh kosong.',
            ]);

            Labor::create([
                'tanggal' => $request->tanggal,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'nik' => $request->nik,
                'T_D' => $request->T_D,
                'pols' => $request->pols,
                'glu' => $request->glu,
                'khd' => $request->khd,
                'urid' => $request->urid,
                'hd' => $request->hd,
                'keterangan' => $request->keterangan,
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
            ]);
        } else if ($existing_labor !== $pasien_id) {
            $request->validate([
                'tanggal' => 'required',
                'nama' => 'required',
                'umur' => 'required|integer',
                'nik' => 'required',
                'T_D' => 'nullable',
                'pols' => 'nullable',
                'glu' => 'nullable',
                'khd' => 'nullable',
                'urid' => 'nullable',
                'hd' => 'nullable',
                'keterangan' => 'nullable',
            ], [
                [
                    'tanggal.required' => 'Tanggal tidak boleh kosong.',
                    'nama.required' => 'Nama tidak boleh kosong.',
                    'umur.required' => 'Umur tidak boleh kosong.',
                    'umur.integer' => 'Umur harus berupa angka.',
                    'nik.required' => 'Nik tidak boleh kosong.',
                ]
            ]);
            Labor::create([
                'tanggal' => $request->tanggal,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'nik' => $request->nik,
                'T_D' => $request->T_D,
                'pols' => $request->pols,
                'glu' => $request->glu,
                'khd' => $request->khd,
                'urid' => $request->urid,
                'hd' => $request->hd,
                'keterangan' => $request->keterangan,
                'user_id' => $user_id,
                'pasien_id' => $pasien_id,
            ]);
        }
        // Add any additional logic or redirects as needed
        Alert::success('Hore!', 'Data laboratorium Successfully');
        return Redirect::route('show_labor');
    }
    public function show_labor()
    {
        $labor = Labor::all();
        return view('show_labor', compact('labor'));
    }
    public function delete_labor(Labor $labor)
    {
        $labor->forceDelete();

        // Atur ulang urutan ID
        DB::statement('ALTER TABLE Labor AUTO_INCREMENT = 1');
        alert()->success('Hore!', 'Kunjungan Labor sukses di hapus');
        return Redirect::route('show_labor');
    }

    public function edit_labor(Labor $labor)
    {
        return view('edit_labor', compact('labor'));
    }
    public function update_labor(Labor $labor, Pasien $pasien, Request $request)
    {
        $user_id = Auth::id();
        $pasien_id = $pasien->id;

        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'umur' => 'required|integer',
            'nik' => 'required',
            'T_D' => 'nullable',
            'pols' => 'nullable',
            'glu' => 'nullable',
            'khd' => 'nullable',
            'urid' => 'nullable',
            'hd' => 'nullable',
            'keterangan' => 'nullable',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong.',
            'nama.required' => 'Nama tidak boleh kosong.',
            'umur.required' => 'Umur tidak boleh kosong.',
            'umur.integer' => 'Umur harus berupa angka.',
            'nik.required' => 'Nik tidak boleh kosong.',
        ]);

        $labor->update([
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'nik' => $request->nik,
            'T_D' => $request->T_D,
            'pols' => $request->pols,
            'glu' => $request->glu,
            'khd' => $request->khd,
            'urid' => $request->urid,
            'hd' => $request->hd,
            'keterangan' => $request->keterangan,
            'user_id' => $user_id,
            'pasien_id' => $request->pasien_id,
        ]);
        toast('Kunjungan Labor berhasil di edit!', 'success');
        return redirect()->route('show_labor');
    }
}

