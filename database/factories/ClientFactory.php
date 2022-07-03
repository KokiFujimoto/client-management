<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tel = str_replace('-', '', $this->faker->phoneNumber());

        return [
            'name' => $this->faker->name(),
            'kana' => $this->faker->kanaName(),
            'tel'  => $tel,
            'info' => $this->faker->realText(50),
        ];
    }
}
