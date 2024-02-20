<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PreferencesTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_save_preferences() {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->post(route('save.preferences'), [
                'maxTokens' => 2048,
                'temperature' => 0.5,
            ]);

        $this->assertDatabaseHas('preferences', [
            'user_id' => $user->id,
            'max_tokens' => 2048,
            'temperature' => 0.5,
        ]);
    }

    public function test_cannot_save_preferences_exceeding_maximum_limits() {
        $user = User::factory()->create();
        
        $response = $this->actingAs($user)
                        ->post(route('save.preferences'), [
                            'maxTokens' => 3000,
                            'temperature' => 1.5,
                        ]);

        $response->assertStatus(302)
                ->assertSessionHasErrors(['maxTokens', 'temperature']);
    }    
}
