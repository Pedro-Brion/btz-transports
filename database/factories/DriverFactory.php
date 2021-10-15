<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function withFaker()
    {
        return \Faker\Factory::create('pt_BR');
    }

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'cpf' => $this->faker->cpf(false),
            'cnh' => $this->faker->randomNumber(9),
            'cat_cnh' => $this->faker->randomElement($array = array ('A','B','C','D','E')),
            'birth' => $this->faker->date(),
            'active' => true,
        ];
    }
}
