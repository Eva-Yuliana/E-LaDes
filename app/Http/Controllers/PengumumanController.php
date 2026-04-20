<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('pengumuman.index');
    }

    public function create()
    {
        return view('pengumuman.create');
    }

    public function show()
    {
        return view('pengumuman.show');
    }

    public function edit()
    {
        return view('pengumuman.edit');
    }

    public function admin()
    {
        return view('pengumuman.admin');
    }
}