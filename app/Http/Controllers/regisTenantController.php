<?php

namespace App\Http\Controllers;

use App\Models\regisTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class regisTenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regis = DB::table('registenant')->paginate(10);

        // // return view('regisTenant.index');
        // // return view('regisTenant.index', ['regis' => $regis]);
        // return view('regisTenant.index')->with('regis', $regis);
        // return $regis;
        return view('regisTenant/index', compact('regis'));
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
     * @param  \App\Models\regisTenant  $regisTenant
     * @return \Illuminate\Http\Response
     */
    public function show(regisTenant $regisTenant)
    {
        // return $regisTenant;

        // $regisTenant->makeHidden(['ktp']);
        return view('regisTenant/show', compact('regisTenant'));

        // $regis = DB::table('registenant')->get();
        // return view('regisTenant/show', compact('regis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\regisTenant  $regisTenant
     * @return \Illuminate\Http\Response
     */
    public function edit(regisTenant $regisTenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\regisTenant  $regisTenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, regisTenant $regisTenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\regisTenant  $regisTenant
     * @return \Illuminate\Http\Response
     */
    // public function destroy(regisTenant $regisTenant)
    public function destroy($id)
    {
        DB::table('registenant')->where('id', $id)->delete();
        return redirect('regisTenant')->with('status', 'Data Tenant berhasil dihapus!');
    }
}
