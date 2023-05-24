<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;
use Database\Seeders\ItalianRailwayCityProvider;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker->addProvider(new ItalianRailwayCityProvider($faker));
        for($i = 0; $i <= 15; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->company;
            $newTrain->departure_station = $faker->italianRailwayCity();
            $newTrain->arrival_station = $faker->italianRailwayCity();
            $newTrain->departure_time = $faker->time('H:i:s');
            $newTrain->arrival_time = $faker->time('H:i:s');
            $newTrain->date_travel = $faker->dateTimeBetween('-1 week');
            $newTrain->train_code = $faker->unique()->numberBetween(1000, 9999);
            $newTrain->number_carriages = $faker->numberBetween(1, 10);
            $newTrain->in_time = $faker->boolean;
            $newTrain->deleted = $faker->boolean;
            // ...
            $newTrain->save();
        }
    }
}
