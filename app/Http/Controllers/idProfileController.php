<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class idProfileController extends Controller
{
    public function data()
    {
        $data = DB::table('profil')->first();
        return view('index')->with('data', $data);
    }
}
