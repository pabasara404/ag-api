<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'nic' => $this->faker->creditCardNumber,
            'contact_number' => $this->faker->phoneNumber,
            'date_of_birth' => $this->faker->date,
            'user_id' => User::factory(1)->createOne()->id
        ];
    }
}
