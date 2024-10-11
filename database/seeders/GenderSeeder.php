<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = ['laki-laki', 'perempuan'];

        foreach ($genders as $name) {
            if (! Gender::StrictByName($name)->first()) {
                Gender::create([
                    'name' => $name,
                ]);
            }
        }
    }
}
