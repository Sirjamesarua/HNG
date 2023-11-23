<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Person;

class PersonTest extends TestCase
{
    use RefreshDatabase;

    public function testCreatePerson()
    {
        $response = $this->postJson('/api', ['name' => 'John Doe']);
        $response->assertStatus(201);
        $this->assertDatabaseHas('people', ['name' => 'John Doe']);
    }

    public function testReadPerson()
    {
        $person = Person::create(['name' => 'James Arua']);
        $response = $this->getJson("/api/{$person->id}");
        $response->assertStatus(200)
            ->assertJson(['name' => 'James Arua']);
    }

    public function testUpdatePerson()
    {
        $person = Person::create(['name' => 'Alice Johnson']);
        $response = $this->putJson("/api/{$person->id}", ['name' => 'Updated Name']);
        $response->assertStatus(200);
        $updatedPerson = Person::find($person->id);
        $this->assertEquals('Updated Name', $updatedPerson->name);
    }

    public function testDeletePerson()
    {
        $person = Person::create(['name' => 'Mark Johnson']);
        $response = $this->delete("/api/{$person->id}");
        $response->assertStatus(200);
        $this->assertDatabaseMissing('people', ['id' => $person->id]);
    }
}
