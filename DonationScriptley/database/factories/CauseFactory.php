<?php

namespace Database\Factories;

use App\Models\Cause;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class CauseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Cause::class;
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'target_amount' => rand(100,1000),
            'status' => array_rand(['active','deactive']),
            'donation' => rand(100,1000),
            'image' => $this->faker->image(),
        ];
    }
}
