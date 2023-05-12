<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i = 0; $i < 20; $i++) {

            $train = new Train();

            $train->train_category = $faker->word();
            $train->agency = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('-10 days', '+1 month')->format('Y-m-d H:i:s');
            $train->arrival_time = $faker->dateTimeBetween('+1 month', '+2 month')->format('Y-m-d H:i:s');
            $train->train_code = $faker->randomNumber(4, true);
            $train->carriage_number = $faker->randomNumber(2, true);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();

            $train->save();
        }

        


        // ------------------------ IMPLEMENTO DATI DB VIA FILE EXCEL CSV ----------------------------------------

        // $trainFile = fopen(__DIR__ . '/../train_db.csv', 'r');

        // $trainCSV = fgetcsv($trainFile);
        // $trainCSV = fgetcsv($trainFile);

        // while ($trainCSV != false) {

        //     $train = new Train();

        //     $train->train_category = $trainCSV[0];
        //     $train->agency = $trainCSV[1];
        //     $train->departure_station = $trainCSV[2];
        //     $train->arrival_station = $trainCSV[3];
        //     $train->departure_time = $trainCSV[4];
        //     $train->arrival_time = $trainCSV[5];
        //     $train->train_code = $trainCSV[6];
        //     $train->carriage_number = $trainCSV[7];
        //     $train->in_time = $trainCSV[8];
        //     $train->deleted = $trainCSV[9];

        //     $train->save();

        //     $trainCSV = fgetcsv($trainFile);
        // }
        
    }
}
