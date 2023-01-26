<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class idRegisTenantController extends Controller
{
    public function data()
    {
        $data = DB::table('registenant')->first();
        return view('UI/regisTenant')->with('data', $data);
    }

    public function add(Request $request)
    {        
        // $ktp = $request->file_ktp->getClientOriginalName();
        // $cv = $request->file_cv->getClientOriginalName();
        // $proposal = $request->file_proposal->getClientOriginalName();

        // $request->file_ktp->move('pendaftaran_tenant', $ktp);
        // $request->file_cv->move('pendaftaran_tenant', $cv);
        // $request->file_proposal->move('pendaftaran_tenant', $proposal);
        // DB::table('registenant')
        // ->insert([
        //     'nama_pemilik_usaha' => $request->nama,
        //     'email' => $request->email,
        //     'no_telp' => $request->no_telp,
        //     'jenis_tenant'=> $request->jenis_tenant,
        //     'jenis_bidang_usaha'=> $request->jenis_bidang,
        //     'nama_usaha'=> $request->nama_usaha,
        //     'deskripsi'=> $request->deskripsi,
        //     'ktp'=> $ktp,
        //     'cv'=> $cv,
        //     'proposal_bisnis'=> $proposal,
        // ]);

        // return redirect('registrasi')->with('status', 'Pendaftaran berhasil dilakukan!');

        $dokumen = '';

        if ($request->file_ktp) {
            $ktp = $request->file_ktp->getClientOriginalName();
            $request->file_ktp->move('pendaftaran_tenant',$ktp);

            $cv = $request->file_cv->getClientOriginalName();
            $request->file_cv->move('pendaftaran_tenant',$cv);

            $proposal = $request->file_proposal->getClientOriginalName();
            $request->file_proposal->move('pendaftaran_tenant',$proposal);

            $data = [
                'nama_pemilik_usaha' => $request->nama,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'jenis_tenant'=> $request->jenis_tenant,
                'jenis_bidang_usaha'=> $request->jenis_bidang,
                'nama_usaha'=> $request->nama_usaha,
                'deskripsi'=> $request->deskripsi,
                'ktp'=> $ktp,
                'cv'=> $cv,
                'proposal_bisnis'=> $proposal,
            ];
        }
        
        else $data = [
            'nama_pemilik_usaha' => $request->nama_pemilik_usaha,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'jenis_tenant'=> $request->jenis_tenant,
            'jenis_bidang_usaha'=> $request->jenis_bidang_usaha,
            'nama_usaha'=> $request->nama_usaha,
            'deskripsi'=> $request->deskripsi,
            'ktp'=> $dokumen,
            'cv'=> $dokumen,
            'proposal_bisnis'=> $dokumen,
        ];

        DB::table('registenant')
        ->insert($data);

        // $datax->insert($data);
        return redirect('registrasi')->with('status', 'Pendaftaran berhasil dilakukan!');
    }
}
