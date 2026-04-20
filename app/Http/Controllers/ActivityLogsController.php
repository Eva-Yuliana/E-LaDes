<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityLogsController extends Controller
{
    public function index()
    {
        return view('activityLogs.index');
    }

    public function show()
    {
        return view('activityLogs.show');
    }
}
