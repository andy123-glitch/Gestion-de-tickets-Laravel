<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaires>
 */
class CommentairesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'commentaire' =>fake()->text(4096),
            'ticket_id' => fake()->numberBetween(0, 10),
            'date_commentaire'=>fake()->dateTime(),
        ];
    }
}
