<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'program'    => $this->faker->randomElement(['BSCS', 'BSIT', 'BSEMC']),
            'enrollment_year' => $this->faker->year('-5 years'),
            'birthday'   => $this->faker->dateTimeBetween('-25 years', '-18 years'),
            // 'user_id', 'first_name', 'last_name' will be overridden in seeder
        ];
    }
}
