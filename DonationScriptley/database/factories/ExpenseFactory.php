<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Expense::class;
    public function definition()
    {
        return [
            //
            'category' => rand(0, 1) ? 'Food' : 'Education',
            'detail' => $this->faker->text(),
            'amount' => rand(100,1000),
            'date' => $this->faker->date(),
            'image' => $this->faker->image(),
        ];
    }
}
