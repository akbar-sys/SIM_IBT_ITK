<?php

namespace App\Http\Controllers;

use App\Models\organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class organizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('organization/index');
        $data= DB::table('organisasi')->first();
        return view('organization.index')->with('data', $data);
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
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('organization/edit', compact('organization'));
        $datax = organization::findOrFail($id);
        return view('organization/edit', compact('datax'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $datax = organization::findOrFail($id);
        // $datax->update([
        //     'title' => $request->title,
        //     'deskripsi' => $request->deskripsi,
        //     'gambar' => $request->gambar,
        // ]);
        // return redirect('organization')->with('status', 'Data Organisasi berhasil diupdate!');

        // $this->validate($request,[
        //     'title' => 'required',
        //     'deskripsi' => 'required',
        //     'gambar' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        // ]);

        $datax = organization::findOrFail($id);
        $item = $request->except(['_token']);

        if($request->file('gambar')){

            if($datax->gambar != ''){
                unlink($datax->gambar);
            }

            $imgName = time().'.'.$request->file('gambar')->extension();
            $item['gambar'] = $request->file('gambar')->move('gambar_organisasi',$imgName);
        }

        $datax::update($data);
        return redirect('organization')->with('status', 'Data Organisasi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(organization $organization)
    {
        //
    }
}
