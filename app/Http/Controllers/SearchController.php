<?php

namespace App\Http\Controllers;

use App\Models\kunjungan_bpjs;
use App\Models\Pasien;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchumum(Request $request)
    {
        $search = $request->search;

        $pasien = Pasien::where(function ($query) use ($search) {
            $query->whereRaw('LOWER(nama) LIKE ?', ["%" . strtolower($search) . "%"]) // Huruf awal dari nama
                ->orWhereRaw('LOWER(nomer_telepon) LIKE ?', ["%" . strtolower($search) . "%"]); // Nomor telepon
        })->get();

        return view('index_pasien', compact('pasien', 'search'));
    }

    public function searchbpjs(Request $request)
    {
        $search = $request->search;

        $pasien = kunjungan_bpjs::where(function ($query) use ($search) {
            $query->whereRaw('LOWER(nama) LIKE ?', ["%" . strtolower($search) . "%"]) // Huruf awal dari nama
                ->orWhereRaw('LOWER(no_kartu) LIKE ?', ["%" . strtolower($search) . "%"]); // Nomor telepon
        })->get();

        return view('index_pasien', compact('pasien', 'search'));
    }

}
