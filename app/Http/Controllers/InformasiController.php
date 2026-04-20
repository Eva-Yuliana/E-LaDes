<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
     public function kabar()
    {
        return view('informasi.kabar');
    }

    public function kabarDetail()
    {
        return view('informasi.kabarDetail');
    }

    public function pengumuman()
    {
        return view('informasi.pengumuman');
    }

    public function pengumumanDetail()
    {
        return view('informasi.pengumumanDetail');
    }
}
