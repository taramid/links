<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nano = new Client();

        return [
            'user_id' => 1,
            'url' => fake()->url(),
            'hook' => $nano->generateId(env('HOOK_LEN')),
        ];
    }
}
