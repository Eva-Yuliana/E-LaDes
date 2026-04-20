<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembuatanSuratController extends Controller

{
    public function index()
    {
        return view('pembuatanSurat.index');
    }

    public function create()
    {
        return view('pembuatanSurat.create');
    }

    public function riwayat()
    {
        return view('pembuatanSurat.riwayat');
    }
}