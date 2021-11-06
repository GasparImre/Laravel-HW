<?php

namespace Database\Factories;

use App\Models\ContactModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'message' => $this->faker->windowsPlatformToken(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
