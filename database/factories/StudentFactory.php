<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fi = explode(' ', fake()->name());

        return [
            'name' => $fi[0],
            'surname' => $fi[1],
            'group_id' => rand(1,3),
            'created_at' => date("Y-m-d H:i:s"),
            "updated_at"=> date("Y-m-d H:i:s"),
        ];
    }
}
