<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassStudent>
 */
class ClassStudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_id' => Course::inRandomOrder()->value('id') ?? 1,
            'student_id' => Student::inRandomOrder()->value('id') ?? 1,
            // 'created_at' and 'updated_at' will be handled automatically by Laravel
        ];
    }
}
