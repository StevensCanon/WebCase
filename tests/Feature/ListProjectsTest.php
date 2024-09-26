<?php

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListProjectsTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_see_all_projects()
    {
        $this->withoutExceptionHandling();

        // Crear un usuario y autenticarlo
        $user = User::factory()->create();
        $this->actingAs($user);


        $project = Project::factory()->create();
        dd($project->toArray());

        $response = $this->get(route('projects.index'));


        $response->assertStatus(200);

        $response->assertSee($project->titulo);
    }
}
