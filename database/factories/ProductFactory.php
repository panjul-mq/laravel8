<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_title' => $this->faker->sentence(),
            'product_slug' => \Str::slug($this->faker->sentence()),
            'product_image' => $this->faker->sentence(),
            'product_price' => $this->faker->randomNumber(7)
        ];
    }
}
