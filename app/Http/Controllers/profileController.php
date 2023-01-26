<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('profile/index');
        // return view('news.data');

        $data = DB::table('profil')->first();
        return view('profile.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        // return view('profile/edit', compact('profile'));
        $datax = profile::findOrFail($id);
        return view('profile/edit', compact('datax'));
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $profile->profil = $request->profil;
        // $profile->visi = $request->visi;
        // $profile->misi = $request->misi;
        // $profile->tujuan = $request->tujuan;
        // $profile->save();

        // return redirect('profile')->with('status', 'Data Profil berhasil diupdate!');

        $datax = profile::findOrFail($id);
        $datax->update([
            'profil' => $request->profil,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
        ]);
        return redirect('profile')->with('status', 'Data Profil berhasil diupdate!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
