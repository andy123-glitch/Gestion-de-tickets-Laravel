<?php

namespace Database\Factories;

use App\Models\Biens;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $biens=DB::table('biens')->select('id')->get();
        return [
            'id_biens'=>$biens[ fake()->numberBetween(0,count($biens)-1)]->id,
            'titre'=>fake()->text(256),
            'description'=>fake()->text(4096),
            'nom_usager'=>fake()->name(),
            'date_saisie'=>fake()->dateTime(),
            'statut'=>fake()->randomElement(['Nouveau','En cours','Rejeté','Terminé','Clos']),
            'nom_statut'=>fake()->name(),
            'date_statut'=>fake()->dateTime(),
            'commentaire_statut'=>fake()->text(1024),
        ];
    }
}
