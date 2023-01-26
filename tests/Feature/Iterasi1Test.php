<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class Iterasi1Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_melihat_data_profil()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/profile');

        $response->assertStatus(200);


    }

    public function test_edit_data_profil()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $request = [
            'profil' => 'adawd',
            'visi' => 'adawd',
            'misi' => 'adawd',
            'tujuan' => 'adawd',
        ];

        $response = $this->actingAs($user)->put(route('profile.update',2),$request);

        $response->assertStatus(302);
    }

    public function test_melihat_data_organisasi()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/organization');

        $response->assertStatus(200);


    }

    public function test_edit_data_organisasi()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $request = [
            'title' => 'adawd',
            'deskripsi' => 'adawd',
        ];

        $response = $this->actingAs($user)->put(route('organization.update',2),$request);

        $response->assertStatus(302);

        // php artisan test --testsuite=Feature
        // 200 = return view
        // 302 = redirect (tambah, edit, hapus)
        //--filter=Iterasi1Test 
    }
}