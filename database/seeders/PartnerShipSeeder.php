<?php

namespace Database\Seeders;

use App\Models\PartnerShip;
use App\Traits\Uploader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class PartnerShipSeeder extends Seeder
{
    use Uploader;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partnerships = [
            [
                'name' => 'Bank Fajar',
                'logo' => 'bank-fajar.png'
            ],
            [
                'name' => 'Bisma Informatika',
                'logo' => 'bisma.png',
            ],
            [
                'name' => 'Bukaloka.com',
                'logo' => 'bukaloka.png',
            ],
            [
                'name' => 'Chuonk University',
                'logo' => 'chuonk.png',
            ],
            [
                'name' => 'Datayasa',
                'logo' => 'datayasa.png',
            ],
            [
                'name' => 'LPBA',
                'logo' => 'lpba.png',
            ],
            [
                'name' => 'LPK Darma',
                'logo' => 'lpk-darma.png',
            ],
            [
                'name' => 'STIKOM',
                'logo' => 'stikom.png',
            ],
            [
                'name' => 'Wufeng University',
                'logo' => 'wufeng-uni.png',
            ],
            [
                'name' => 'Zettabyte Pte. Ltd.',
                'logo' => 'zettabyte.png',
            ],
        ];

        $this->createPartnerShips($partnerships);
    }

    /**
     * Create partnerships based on a dataset
     * 
     * @param array<array<string>> $data
     */
    private function createPartnerShips(array $data)
    {
        foreach ($data as $i => $item) {
            $filePath = null;
            $email = isset($item['email']) ? $item['email'] : strtolower(str_replace(' ', '', $item['name'])) . '@email.com';

            if (PartnerShip::StrictByEmail($email)->first()) {
                continue;
            }

            $phone = isset($item['phone']) ? $item['phone'] : '-';
            $address = isset($item['address']) ? $item['address'] : '-';

            if (isset($item['logo'])) {
                $file = new UploadedFile(database_path('seeders/images/partnerships/' . $item['logo']), $item['logo']);
                $filePath = $this->uploadImage($file);
            }

            PartnerShip::create([
                'name' => $item['name'],
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'logo' => $filePath,
            ]);
        }
    }
}
