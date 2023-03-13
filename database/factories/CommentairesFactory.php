<?php

namespace Database\Factories;

use App\Models\Tickets;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
        $ticket=DB::table('tickets')->select('id')->get();
        return [
            'nom' => fake()->name(),
            'commentaire' =>fake()->text(4096),
            'ticket_id' =>$ticket[ fake()->numberBetween(0,count($ticket)-1)]->id,
            'date_commentaire'=>fake()->dateTime(),
        ];
    }
}
