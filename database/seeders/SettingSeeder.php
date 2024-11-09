<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Traits\Uploader;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class SettingSeeder extends Seeder
{
    use Uploader;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'org_name' => [
                'value' => 'SMK TI Bali Global Badung',
                'type' => 'text',
            ],
            'org_slogan' => [
                'value' => 'IT Proffesional School',
                'type' => 'text',
            ],
            'org_slug' => [
                'value' => 'schti',
                'type' => 'text',
            ],
            'org_logo' => [
                'value' => 'logo.png',
                'type' => 'image',
            ],
            'org_desc' => [
                'value' => 'SMK TI Bali Global Badung adalah sekolah it proffesional dan terkini',
                'type' => 'text',
            ],
        ];

        foreach ($settings as $key => $data) {
            $this->createKey($key, $data);
        }
    }

    /**
     * Create a settings key based on a set of data
     *
     * @param  array<string>  $data
     */
    private function createKey(string $name, array $data)
    {
        if (! Setting::StrictByName($name)->first()) {
            if (isset($data['type']) && $data['type'] === 'image') {
                $file = new UploadedFile(database_path('seeders/images/' . $data['value']), $data['value']);
                $filePath = $this->uploadImage($file);

                Setting::create([
                    'name' => $name,
                    'value' => $filePath,
                ]);

                return;
            }

            Setting::create([
                'name' => $name,
                'value' => $data['value'],
            ]);
        }
    }
}
