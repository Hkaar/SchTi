<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = ['denpasar', 'badung'];

        foreach ($cities as $city) {
            if (! City::StrictByName($city)->first()) {
                City::create([
                    'name' => $city,
                ]);
            }
        }
    }
}
