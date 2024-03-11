<?php

namespace Database\Factories;

use App\Models\Category; // Assuming your Category model is in the 'App\Models' namespace
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'status' => $this->faker->numberBetween(0, 1),
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
