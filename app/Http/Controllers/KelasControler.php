<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasControler extends Controller
{
    public function index()
    {
        $data['result'] = \App\Kelas::all();

        return view('kelas/index')   -> with ($data);
    }
}
