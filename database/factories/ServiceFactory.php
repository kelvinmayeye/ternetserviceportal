<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $statusId = Status::inRandomOrder()->value('id');
        $departmentId = Department::inRandomOrder()->value('id');
        return [
            'name' => $this->faker->randomElement(['Affordable Bandwidth','Identity Provider','Net Tools','Campus Connect']),
            'image' => 'https://www.ternet.or.tz/front/default/logo.png',
            'description' => $this->faker->text(100),
            'status_id' => $statusId,
            'department_id' => $departmentId
        ];
    }
}
