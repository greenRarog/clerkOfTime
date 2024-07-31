<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timeschema>
 */
class TimeschemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "date"      => $this->faker->date(),
            "start"     => $this->faker->time(),
            "end"       => $this->faker->time(),
            "value"     => $this->faker->randomNumber(5),
            "separator" => $this->faker->randomNumber(3),
        ];
    }
}
