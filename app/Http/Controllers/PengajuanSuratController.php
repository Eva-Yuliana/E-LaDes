<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanSuratController extends Controller
{
    /**
     * Halaman daftar pengajuan
     */
    public function index()
    {
        return view('pengajuanSurat.index');
    }

     public function edit()
    {
        return view('pengajuanSurat.edit');
    }

    /**
     * Halaman show pengajuan
     */
    public function show()
    {
        return view('pengajuanSurat.show');
    }

     public function showw()
    {
        return view('pengajuanSurat.showw');
    }
}