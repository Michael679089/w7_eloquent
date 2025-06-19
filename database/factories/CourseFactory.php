<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    public function definition(): array
    {
        $courses = [
            [
                'subject' => 'Human Computer Interaction',
                'course_code' => 'CS101',
                'credits' => 3,
                'description' => 'Study of how humans interact with machines and UIs.'
            ],
            [
                'subject' => 'Data Structures',
                'course_code' => 'CS102',
                'credits' => 4,
                'description' => 'Covers arrays, stacks, queues, trees, and graphs.'
            ],
            [
                'subject' => 'Operating Systems',
                'course_code' => 'CS103',
                'credits' => 4,
                'description' => 'Covers processes, memory management, and file systems.'
            ],
            [
                'subject' => 'Database Systems',
                'course_code' => 'CS104',
                'credits' => 3,
                'description' => 'Covers relational databases, SQL, and normalization.'
            ],
            [
                'subject' => 'Software Engineering',
                'course_code' => 'CS105',
                'credits' => 3,
                'description' => 'Principles of the software development life cycle.'
            ],
            [
                'subject' => 'Web Development',
                'course_code' => 'CS106',
                'credits' => 3,
                'description' => 'Covers HTML, CSS, JavaScript, and backend development.'
            ],
            [
                'subject' => 'Computer Networks',
                'course_code' => 'CS107',
                'credits' => 3,
                'description' => 'Basics of networking, protocols, and security.'
            ],
            [
                'subject' => 'Artificial Intelligence',
                'course_code' => 'CS108',
                'credits' => 4,
                'description' => 'Fundamentals of AI, including search, planning, and ML.'
            ],
            [
                'subject' => 'Mobile App Development',
                'course_code' => 'CS109',
                'credits' => 3,
                'description' => 'Building mobile apps for Android and iOS.'
            ],
            [
                'subject' => 'Cybersecurity',
                'course_code' => 'CS110',
                'credits' => 3,
                'description' => 'Covers threats, encryption, and defensive strategies.'
            ],
        ];

        $course = $this->faker->unique()->randomElement($courses);
        $teacherId = Teacher::inRandomOrder()->value('id'); // Get a random teacher's ID

        return array_merge($course, [
            'teacher_id' => $teacherId ?? 1, // fallback to teacher ID 1 if none found
        ]);
    }
}
