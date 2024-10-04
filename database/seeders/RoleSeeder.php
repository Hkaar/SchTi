<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin', 'operator', 'teacher', 'student_counselor', 'student'
        ];

        foreach ($roles as $name) {
            if (! Role::StrictByName($name)->first()) {
                Role::create([
                    'name' => $name,
                ]);
            }
        }
    }
}
