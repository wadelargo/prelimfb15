<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lname'     =>fake() ->lastname(),
            'fname'     =>fake() ->firstname(),
            'position'     =>fake() ->randomElement(['Dean','Asst.Dean','Instructor','Teacher','Registrar','Sports Coordinator']),
            'department_id'     =>fake() ->numberBetween(1,5)

        ];
    }
}
