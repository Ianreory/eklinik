<?php

namespace App\Http\Controllers;

use App\Models\bpjs;
use App\Models\kunjungan_bpjs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class KunjunganbpjsController extends Controller
{
    public function create_kunjunganbpjs()
    {
        return view('create_kunjunganbpjs');
    }
    public function store_kunjunganbpjs(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'no_kartu' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nomer_telepon' => 'required',
        ], [
            'tanggal' => 'Tanggal tidak boleh kosong',
            'no_kartu.required' => 'No kartu tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'tgl_lahir.required' => 'Tgl Lahir tidak boleh kosong',
            'nomer_telepon.required' => 'Nomor Telepon tidak boleh kosong',
        ]);

        $kunjungan_bpjs = kunjungan_bpjs::create([
            'tanggal' => $request->tanggal,
            'no_kartu' => $request->no_kartu,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomer_telepon' => $request->nomer_telepon,
        ]);
        Alert::success('Hore!', 'Post Created Successfully');
        return Redirect::route('show_kunjunganbpjs', ['kunjungan_bpjs' => $kunjungan_bpjs]);
    }
    public function show_kunjunganbpjs(kunjungan_bpjs $kunjungan_bpjs, bpjs $bpjs)
    {
        $pagination = 10;
        $kunjungan_bpjs = kunjungan_bpjs::paginate($pagination);
        return view('show_kunjunganbpjs', compact('kunjungan_bpjs', 'bpjs'));
    }
    public function delete_kunjungan_bpjs(kunjungan_bpjs $kunjungan_bpjs)
    {
        // $kunjungan_bpjs = kunjungan_bpjs::find($pasien);

        // if ($kunjungan_bpjs) {
        //     // Hapus data kunjungan_bpjs
        //     $kunjungan_bpjs->delete();

        //     // Atur ulang urutan ID
        //     DB::statement('ALTER TABLE kunjungan_bpjs AUTO_INCREMENT = 1');
        //     alert()->success('Hore!', 'Post Deleted Successfully');

        //     // Set the success message in the session
        //     session()->flash('alert', alert()->success('Hore!', 'Post Deleted Successfully'));

        //     return redirect()->route('show_kunjunganbpjs');
        // } else {
        //     // Set the failure message in the session
        //     session()->flash('alert', alert()->success('Sorry!', 'Post Deletion Failed'));

        //     return redirect()->route('show_kunjunganbpjs');
        // }
        $kunjungan_bpjs->forceDelete();

        // Atur ulang urutan ID
        DB::statement('ALTER TABLE kunjungan_bpjs AUTO_INCREMENT = 1');
        alert()->success('Hore!', 'Post Deleted Successfully');
        return Redirect::route("show_kunjunganbpjs");
    }
    public function edit_kunjunganbpjs(kunjungan_bpjs $kunjungan_bpjs)
    {
        return view('edit_kunjunganbpjs', compact('kunjungan_bpjs'));
    }
    public function update_kunjunganbpjs(kunjungan_bpjs $kunjungan_bpjs, Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'no_kartu' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nomer_telepon' => 'required',
        ], [
            'tanggal' => 'Tanggal tidak boleh kosong',
            'no_kartu.required' => 'No kartu tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'tgl_lahir.required' => 'Tgl Lahir tidak boleh kosong',
            'nomer_telepon.required' => 'Nomor Telepon tidak boleh kosong',
        ]);

        $pasien = kunjungan_bpjs::create([
            'tanggal' => $request->tanggal,
            'no_kartu' => $request->no_kartu,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomer_telepon' => $request->nomer_telepon,
        ]);
        toast('Registrasi bpjs berhasil di edit!', 'success');
        return redirect()->route('show_kunjunganbpjs');
    }
}
