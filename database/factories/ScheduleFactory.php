<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    protected static array $availableSlots = [];

    public function definition(): array
    {
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $startTimes = ['08:00', '09:30', '11:00', '13:00', '14:30', '16:00'];

        // Fill available slots once
        if (empty(static::$availableSlots)) {
            foreach ($days as $day) {
                foreach ($startTimes as $time) {
                    $dateTime = now()->next($day)->setTime(...explode(':', $time))->format('Y-m-d H:i:s');
                    static::$availableSlots[] = [
                        'day' => $day,
                        'time' => $dateTime
                    ];
                }
            }

            shuffle(static::$availableSlots); // randomize the order
        }

        // Pop the next available slot
        $slot = array_pop(static::$availableSlots);

        return [
            'day_of_week' => $slot['day'],
            'time_slot' => $slot['time'],
            'room' => $this->faker->randomElement(['Room A', 'Room B', 'Room C', 'Lab 1', 'Lab 2']),
            'term' => $this->faker->numberBetween(1, 3),
            'course_id' => Course::inRandomOrder()->value('id') ?? 1,
        ];
    }
}
