<?php

namespace App\Http\Controllers;


use App\Exports\ExportPasien;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;



class PasienController extends Controller
{

    public function registrasipasien()
    {
        return view("registrasipasien");
    }
    public function store_pasien(request $request)
    {
        $request->validate([
            'tanggal_pendaftaran' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nomer_telepon' => 'required',
        ], [
            'tanggal_pendaftaran' => 'Tanggal tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'nomer_telepon.required' => 'Nomor Telepon tidak boleh kosong',
        ]);

        $pasien = Pasien::create([
            'tanggal_pendaftaran' => $request->tanggal_pendaftaran,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'nomer_telepon' => $request->nomer_telepon,
        ]);
        Alert::success('Hore!', 'Data Pasien Successfully');
        return Redirect::route('index_pasien', ['pasien' => $pasien]);
    }

    //show
    public function index_pasien(Request $request)
    {
        // if ($request->has('search')) {
        //     $pasien = Pasien::whereRaw('LOWER(nama) LIKE ?', ['%' . strtolower($request->search) . '%'])->get();
        // } else {
        //     $pasien = Pasien::all();
        // }
        $pasien = Pasien::all();
        return view('index_pasien', compact('pasien'));
    }

    public function edit_pasien(Pasien $pasien)
    {
        return view('edit_pasien', compact('pasien'));
    }
    public function update_pasien(Pasien $pasien, Request $request)
    {
        $request->validate([
            'tanggal_pendaftaran' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nomer_telepon' => 'required',
        ]);

        $pasien->update([
            'tanggal_pendaftaran' => $request->tanggal_pendaftaran,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'nomer_telepon' => $request->nomer_telepon,
        ]);
        toast('Your Post as been berhasil di edit!', 'success');
        return redirect()->route('index_pasien');
    }
    public function delete_pasien(Pasien $pasien)
    {
        $pasien->forceDelete();

        // Atur ulang urutan ID
        DB::statement('ALTER TABLE pasien AUTO_INCREMENT = 1');
        alert()->success('Hore!', 'Post Deleted Successfully');
        return Redirect::route("index_pasien");
    }

    public function menu_pasien(Pasien $pasien)
    {
        return view('menu_pasien', compact('pasien'));
    }

    public function export_pasien()
    {
        // return Excel::download(new ExportPasien, 'invoices.xlsx', \Maatwebsite\Excel\Excel::XLSX);
        $pasien = 'Pasien' . date('Y-m-d_H-i-s') . '.xlsx';
        return Excel::download(new ExportPasien, $pasien);
    }

}
