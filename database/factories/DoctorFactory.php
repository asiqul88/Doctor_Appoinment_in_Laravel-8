<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'department_id' => rand(1, 100),
            'doctor_name' => $this->faker->name,
            'phone' => $this->faker->numberBetween(1000000, 9999999),
            'fee' => $this->faker->numberBetween(100,1000),
        ];
    }
}
