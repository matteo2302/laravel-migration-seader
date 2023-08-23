<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $new_train = new Train();
        $new_train-> Stazione_di_partenza= $faker->name();
        $new_train-> Stazione_di_arrivo= $faker->name();
        $new_train-> Orario_di_partenza= $faker->;
        $new_train-> Orario_di_arrivo= $faker->;
        $new_train-> Codice_Treno= $faker->;
        $new_train-> Numero_Carrozze= $faker->;
        $new_train-> In_orario= $faker->;
        $new_train-> Cancellato= $faker->;
        
    }
}







