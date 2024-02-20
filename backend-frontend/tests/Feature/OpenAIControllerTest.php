<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class OpenAIControllerTest extends TestCase
{
    public function test_can_send_and_receive_response_from_openai() {
        $user = User::factory()->create();
        
        $response = $this->actingAs($user)
                        ->postJson('/send-message', ['message' => 'Test message']);

        $response->assertStatus(200)
                ->assertJsonStructure(['response']);

        $responseData = $response->decodeResponseJson();
        if ($responseData['response'] == 'No response') {
            $this->assertTrue(false);
        } else {
            $this->assertTrue(true);
        }
    }
}
