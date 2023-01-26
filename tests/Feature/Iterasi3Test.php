<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class Iterasi3Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_menambah_data_berita()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $request = [
            'title' => 'adawd',
            'content' => 'adawd',
        ];

        $response = $this->actingAs($user)->post(route('news.store'),$request);

        $response->assertStatus(302);


    }

    public function test_melihat_data_berita()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/news');

        $response->assertStatus(200);

        // php artisan test --testsuite=Feature
        // 200 = return view
        // 302 = redirect (tambah, edit, hapus)
    }

    public function test_edit_data_berita()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $request = [
            'title' => 'adawd',
            'content' => 'adawd',
        ];

        $response = $this->actingAs($user)->put(route('news.update',17),$request);

        $response->assertStatus(302);


    }

    public function test_menghapus_data_berita()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->delete(route('news.destroy',16));

        $response->assertStatus(302);
    }
    
}
