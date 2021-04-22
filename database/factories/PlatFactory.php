<?php

namespace Database\Factories;

use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'typeplat' => $this->faker->randomElement(['main', 'salad', 'dessert']),
            //  'deliverydate' => $this->faker->dateTime()->format('d/m/Y'),
            'deliverydate' => $this->faker->dateTime(),
            'description' => $this->faker->text,
            'specialinfo' => $this->faker->text,
            'price' => $this->faker->numberBetween(3, 11),
            'image' => $this->faker->image('public/assets/img'),
        ];
    }
}
