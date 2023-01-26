<?php

namespace App\Http\Controllers;

use App\Models\organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        // dd($request->gambar);
        // $namaFile = $_FILES['gambar']['name'];
        // $ukuranFile = $_FILES['gambar']['size'];
        // $error = $_FILES['gambar']['error'];
        // $tmpName = $_FILES['gambar']['tmp_name'];

        // //cek type file
        // $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        // $ekstensiGambar = explode('.', $namaFile);
        // $ekstensiGambar = strtolower(end($ekstensiGambar));
        // if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        //     echo    "<script>
        //                 alert('yang anda upload bukan gambar');
        //             </script>";
        //     return false;
        // }

        //cek size file
        // if( $ukuranFile > 2000000) {
        //     echo    "<script>
        //                 alert('gambar yang anda upload terlalu besar');
        //             </script>";
        //     return false;
        // }

        // move_upload_file($tmpName, 'storage/' . $namaFile);
        // return $namaFile;
        
        $datax = organization::findOrFail($id);
        if($request->gambar){
            $cek = Storage::exists("gambar_organisasi/$datax->gambar");
            if($cek){
                Storage::delete("gambar_organisasi/$datax->gambar");
            }
            $nameImage = $request->gambar->getClientOriginalName();
            Storage::putFileAs("gambar_organisasi", $request->file('gambar'), $nameImage);
            // Storage::putFileAs("gambar_organisasi", $request->file('gambar'), time()."_".$nameImage);
        }

        $datax->update([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nameImage,
        ]);
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
