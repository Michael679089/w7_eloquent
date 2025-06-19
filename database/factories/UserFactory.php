<?php
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name'  => $this->faker->lastName,
            'user_name'  => $this->faker->unique()->userName,
            'password'   => bcrypt('password'),
            'registration_date' => now(),
        ];
    }
}