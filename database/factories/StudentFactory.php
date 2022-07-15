<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'address'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber(),
            'registration_number'=>$this->faker->randomNumber(),
            'discount'=>$this->faker->randomNumber(),
        ];
    }
}
