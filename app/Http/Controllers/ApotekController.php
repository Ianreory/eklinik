<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApotekController extends Controller
{
    public function apotek()
    {
        return view('eapotek');
    }
}
