<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class idProgramsController extends Controller
{
    public function data()
    {
        $data = DB::table('program')->first();
        return view('UI/programs')->with('data', $data);
    }
}
