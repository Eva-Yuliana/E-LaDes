<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // dashboard admin
    public function admin()
    {
        return view('dashboard.admin');
    }

    // dashboard perangkat desa
    public function perangkat()
    {
        return view('dashboard.perangkat');
    }
}