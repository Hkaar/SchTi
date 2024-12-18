<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin', 'operator', 'teacher', 'student_counselor', 'headmaster', 'student',
        ];

        $this->createRoles($roles);
    }

    /**
     * Create roles based on a dataset
     *
     * @param  array<array<int, string>>  $data
     */
    private function createRoles(array $data): void
    {
        foreach ($data as $item) {
            if (! Role::StrictByName($item)->first()) {
                Role::create([
                    'name' => $item,
                ]);
            }
        }
    }
}
