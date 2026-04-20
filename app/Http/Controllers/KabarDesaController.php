<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KabarDesaController extends Controller
{
    public function index()
    {
        return view('kabar.index');
    }

    public function create()
    {
        return view('kabar.create');
    }

    public function show()
    {
        return view('kabar.show');
    }

    public function edit()
    {
        return view('kabar.edit');
    }

    public function admin()
    {
        return view('kabar.admin');
    }
}