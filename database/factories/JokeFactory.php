<?php

namespace Database\Factories;

use App\Models\Joke;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JokeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Joke::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'joke_genre' => $this->faker->name(),
            'joke_coolness' => $this->faker->name(),
            'joke' => $this->faker->name(),
        ];
    }
}
// эта фабрика создаёт правила для генерации рандомных данных в таблицу jokes с помощью laravel faker