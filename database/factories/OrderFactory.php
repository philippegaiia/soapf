<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        protected $model = Order::class;

    public function definition()
    {
        return [
            'title' => 'Payment to ' . $this->faker->name,
            'amount' => rand(10, 500),
            'status' => Arr::random(['draft', 'commandée', 'confirmée','livrée']),
            'order_date' => Carbon::now()->subDays(rand(1, 365))->startOfDay(),
            'delivery_date' => Carbon::now()->subDays(rand(1, 365))->startOfDay(),
        ];
    }
}
