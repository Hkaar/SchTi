<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'org_name' => 'SMK TI Bali Global Badung',
            'org_slogan' => 'Selalu hebat dalam it',
            'org_slug' => 'schti',
            'org_logo' => null,
            'org_desc' => 'Sekolah IT terkini',
        ];

        foreach ($settings as $key => $value) {
            if (! Setting::StrictByName($key)->first()) {
                Setting::create([
                    'name' => $key,
                    'value' => $value,
                ]);
            }
        }
    }
}
