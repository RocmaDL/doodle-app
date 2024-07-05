<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->sentence(),
            'completed'=>$this->faker->boolean(),
            'end_date'=>$this->faker->dateTimeBetween('now', '+1 year'),
            'priority_id'=>$this->faker->numberBetween(1, 3),
            'category_id'=>$this->faker->numberBetween(1, 5),
            'list_tasks_id'=>$this->faker->numberBetween(1, 10),
        ];
    }
}
