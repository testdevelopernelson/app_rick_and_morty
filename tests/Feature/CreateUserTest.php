<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    
    use RefreshDatabase;

    /** @test */
    public function it_create_a_new_user(){
        $this->withoutExceptionHandling();

        $user= User::factory()->create();

        $response= $this->post(route('account.register'), (Array) $user);

        $response->assertStatus(200);
    }
}
