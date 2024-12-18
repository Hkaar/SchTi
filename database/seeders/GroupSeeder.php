<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = ['admins', 'teachers', 'staff', 'counsellors', 'student_council', 'students'];

        foreach ($groups as $name) {
            if (! Group::StrictByName($name)->first()) {
                Group::create([
                    'name' => $name,
                ]);
            }
        }
    }
}
