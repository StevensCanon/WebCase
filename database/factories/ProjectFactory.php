<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $titulo = $this->faker->sentence();

        return [
            'titulo' => $titulo,
            'url' => Str::slug($titulo, '-') . '-' . $this->faker->unique()->word(),
            'description' => $this->faker->paragraph(), 
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
