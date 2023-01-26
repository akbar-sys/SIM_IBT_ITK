<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class Iterasi4Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_login()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/profile');

        $response->assertStatus(200);


    }

    public function test_logout()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->post('/logout');

        $response->assertStatus(302);
    }

    public function test_mengajukan_pendaftaran_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $request = [
            'nama_pemilik_usaha' => 'lorem',
            'email' => 'lorem',
            'no_telp' => 'lorem',
            'jenis_tenant'=> 'lorem',
            'jenis_bidang_usaha'=> 'lorem',
            'nama_usaha'=> 'lorem',
            'deskripsi'=> 'lorem',
        ];

        $response = $this->actingAs($user)->post('registrasi',$request);

        $response->assertStatus(302);
    }

    public function test_melihat_daftar_ajuan_pendaftaran_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/regisTenant');

        $response->assertStatus(200);
    }

    public function test_melihat_detail_ajuan_pendaftaran_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/regisTenant/5');

        $response->assertStatus(200);
    }

    public function test_menghapus_data_ajuan_pendaftaran_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->delete(route('regisTenant.destroy',16));

        $response->assertStatus(302);
    }
}
