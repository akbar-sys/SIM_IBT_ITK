<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class Iterasi2Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_melihat_data_program_inkubasi()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/programs');

        $response->assertStatus(200);


    }

    public function test_edit_data_program_inkubasi()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $request = [
            'title' => 'adawd',
            'deskripsi' => 'adawd',
        ];

        $response = $this->actingAs($user)->put(route('programs.update',1),$request);

        $response->assertStatus(302);
    }

    public function test_melihat_data_contact_us()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/contact');

        $response->assertStatus(200);


    }

    public function test_edit_data_contact_us()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $request = [
            'title' => 'adawd',
            'content' => 'adawd',
        ];

        $response = $this->actingAs($user)->put(route('contact.update',1),$request);

        $response->assertStatus(302);
    }
}
