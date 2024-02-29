<?php

namespace App\Http\Controllers;

use App\Models\Anc;
use App\Models\bpjs;
use App\Models\Inc;
use App\Models\Kb;
use App\Models\Labor;
use App\Models\Persalinan;
use App\Models\Umum;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Label;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home2');
    }
    public function dashboard(Kb $kb, Labor $labor, Umum $umum, Inc $inc, Anc $anc, Persalinan $persalinan, bpjs $bpjs)
    {
        $jumlah = Kb::count();
        $jumlah_labor = Labor::count();
        $jumlah_umum = Umum::count();
        $jumlah_anc = Anc::count();
        $jumlah_inc = Inc::count();
        $jumlah_persalinan = Persalinan::count();
        $bpjs = bpjs::count();
        return view('dashboard', compact('jumlah', 'jumlah_labor', "jumlah_umum", "jumlah_inc", "jumlah_anc", "jumlah_persalinan", "bpjs"));
    }

}
