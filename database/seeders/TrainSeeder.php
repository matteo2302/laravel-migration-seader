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
        for ($i = 0; $i < 40; $i++) {
            $new_train = new Train();
            $new_train->Stazione_di_partenza = $faker->name();
            $new_train->Stazione_di_arrivo = $faker->name();
            $new_train->Orario_di_partenza = $faker->randomFloat(2, 0, 12);
            $new_train->Orario_di_arrivo = $faker->randomFloat(2, 12, 0);
            $new_train->Codice_Treno = $faker->randomFloat(0, 1500, 4000);
            $new_train->Numero_Carrozze = $faker->numberBetween(10, 24);
            $new_train->In_orario = $faker->numberBetween(0, 1);
            $new_train->Cancellato = $faker->numberBetween(0, 1);
        }
    }
}
