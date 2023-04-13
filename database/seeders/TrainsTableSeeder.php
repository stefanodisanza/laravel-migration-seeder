<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('trains')->insert([
                'Azienda' => $faker->company,
                'Stazione di partenza' => $faker->city,
                'Stazione di arrivo' => $faker->city,
                'Orario di partenza' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Orario di arrivo' => $faker->time($format = 'H:i:s', $max = 'now'),
                'Codice Treno' => $faker->bothify('?????'),
                'Numero Carrozze' => $faker->numberBetween($min = 1, $max = 20),
                'In orario' => $faker->boolean,
                'Cancellato' => $faker->boolean
            ]);
        }
    }
}
