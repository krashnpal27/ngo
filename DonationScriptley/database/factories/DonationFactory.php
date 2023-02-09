<?php

namespace Database\Factories;

use App\Models\Donation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     */
      protected $model = Donation::class;
     /* @return array
     */
    public function definition()
    {
        return [
            //
            'fname' => $this->faker->firstName(),
            'lname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => Str::random(10),
            'city' => $this->faker->city(),
            'amount' => Str::random(100,1000),
            'category' => 'food',
            'cause' => 'need',
            'payment_by' => 'cash',
            'amount' => rand(100,1000),
        ];
    }
}
