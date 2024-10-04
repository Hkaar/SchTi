<?php

namespace Database\Seeders;

use App\Models\AttendanceStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['hadir', 'sakit', 'alpha', 'izin', 'dispen'];

        foreach ($statuses as $name) {
            if (! AttendanceStatus::StrictByName($name)->first()) {
                AttendanceStatus::create([
                    'name' => $name,
                ]);
            }
        }
    }
}
