<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class idOrganizationController extends Controller
{
    public function data()
    {
        $data = DB::table('organisasi')->first();
        return view('UI/organization')->with('data', $data);
    }
}
