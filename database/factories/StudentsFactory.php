<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Students::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'     => $this->faker->name,
            'email'      => $this->faker->unique()->safeEmail,
            'nacimiento' => date('Y/m/d'),
            'direccion'  => $this->faker->address,
            'ciudad'     => $this->faker->city,
            'ocupacion'  => $this->faker->jobTitle,
            'oficina'    => $this->faker->company,
            'celular'    => $this->faker->phoneNumber,
            'activo'     => 1
        ];
    }
}
