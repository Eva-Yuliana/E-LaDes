<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    // halaman utama pengajuan
    public function index()
    {
        return view('pengajuan.index');
    }

    // halaman form tambah pengajuan
    public function create()
    {
        return view('pengajuan.create');
    }


    // halaman edit
    public function edit()
    {
        return view('pengajuan.edit');
    }

    
}