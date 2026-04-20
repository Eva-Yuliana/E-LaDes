<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function perangkat()
    {
        return view('profil.perangkat');
    }

    public function admin()
    {
        return view('profil.admin');
    }
}
