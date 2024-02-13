<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake() -> word(),
            'departure_station' => fake() ->  city(),
            'arrival_station' => fake() -> city(),
            'departure_time' => fake() -> dateTimeBetween('now','+1 week'),
            'arrival_time' => fake() -> dateTimeBetween('+1 week', '+2 week'),
            'train_code' => fake() -> regexify('[A-Z]{5}[0-4]{3}'),
            'carriages' => fake() -> randomNumber(2, true),
            'on_time' => fake() -> boolean(),
            'delete' => fake() -> boolean(),
        ];
    }
}
