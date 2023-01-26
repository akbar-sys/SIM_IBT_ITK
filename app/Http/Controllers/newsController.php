<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('berita')->paginate(5);
        return view('news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('berita')
        // ->insert([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'image' => $request->image
        // ]);
        // return redirect('news')->with('status', 'Berita berhasil ditambah!');

        // $dokumen = $request->image->getClientOriginalName();
        // $request->image->move('gambar_berita',$dokumen);

        // DB::table('berita')
        // ->insert([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'image' => $dokumen
        // ]);
        // return redirect('news')->with('status', 'Berita berhasil ditambah!');

        // $datax = news::findOrFail($id);

        //Testing
        $dokumen = '';
        if ($request->image) {
            $dokumen = $request->image->getClientOriginalName();    
            
            $request->image->move('gambar_berita',$dokumen);

            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'image' => $dokumen
            ];
        }
        
        else $data = [
            'title' => $request->title,
            'content' => $request->content,
            'image' => $dokumen
        ];

        DB::table('berita')
        ->insert($data);

        // $datax->insert($data);
        return redirect('news')->with('status', 'Berita berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('news/edit', compact('news'));
        $datax = news::findOrFail($id);
        return view('news/edit', compact('datax'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $datax = news::findOrFail($id);
        // $datax->update([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'image' => $request->image,
        // ]);
        // return redirect('news')->with('status', 'Data Berita berhasil diupdate!');

        $datax = news::findOrFail($id);
        $dokumen = '';
        if ($request->image) {
            $dokumen = $request->image->getClientOriginalName();    
            
            $request->image->move('gambar_berita',$dokumen);

            $data = [
                'title' => $request->title,
                'content' => $request->content,
                'image' => $dokumen
            ];
        }
        
        else $data = [
            'title' => $request->title,
            'content' => $request->content,
            'image' => $datax->image
        ];

        $datax->update($data);
        return redirect('news')->with('status', 'Data Berita berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('berita')->where('id', $id)->delete();
        return redirect('news')->with('status', 'Data Berita berhasil dihapus!');
    }
}
