<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class idContactController extends Controller
{
    public function data()
    {
        $data = DB::table('kontak')->first();
        return view('UI/contact')->with('data', $data);
    }
}
