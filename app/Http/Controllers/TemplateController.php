<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('template.index');
    }

    public function create()
    {
        return view('template.create');
    }


    public function edit()
    {
        return view('template.edit');
    }
}
