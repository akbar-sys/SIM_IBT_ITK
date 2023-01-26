<?php

namespace App\Http\Controllers;

use App\Models\programs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class programsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('programs/index');
        $data = DB::table('program')->first();
        return view('programs.index')->with('data', $data);
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
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function show(programs $programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datax = programs::findOrFail($id);
        // dd($datax);

        return view('programs/edit', compact('datax'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $datax = programs::findOrFail($id);
        // $datax->update([
        //     'title' => $request->title,
        //     'deskripsi' => $request->deskripsi,
        //     'gambar' => $request->gambar,
        // ]);

        // $programs->title = $request->title;
        // $programs->deskripsi = $request->deskripsi;
        // $programs->gambar = $request->gambar;
        // $programs->save();

        $datax = programs::findOrFail($id);
        $dokumen = '';
        if ($request->gambar) {
            $dokumen = $request->gambar->getClientOriginalName();    
            
            $request->gambar->move('gambar_program_inkubasi',$dokumen);

            $data = [
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'gambar' => $dokumen
            ];
        }
        
        else $data = [
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'gambar' => $datax->gambar
        ];

        $datax->update($data);
        return redirect('programs')->with('status', 'Data Program Inkubasi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function destroy(programs $programs)
    {
        //
    }
}
