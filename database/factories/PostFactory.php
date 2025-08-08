<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $mobileNumberLength = 11;

        $mobileNumber = $this->faker->numerify(str_repeat('#', $mobileNumberLength));


        return [
        'title' => fake()->title(),
        'description' => fake()->paragraph(),
        'mobile' => $mobileNumber,
        'user_id' => 1 ,
        ];
    }
}
