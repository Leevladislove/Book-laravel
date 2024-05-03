<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'price' => $this->faker->numberBetween(100, 1000),
            // 'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            // 'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
