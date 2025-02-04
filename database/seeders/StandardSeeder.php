<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Exceptions\MissingDataFileException;
use App\Models\Card;
use Illuminate\Database\Seeder;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (! file_exists(database_path('Standard.json'))) {
            throw new MissingDataFileException('Standard.json file is missing in database directory, please download it from https://mtgjson.com/downloads/all-files/#modern');
        }

        $data = json_decode(file_get_contents(database_path('Standard.json')), true);

        foreach ($data['data'] as $setCode => $setData) {
            $this->command->info("Seeding $setCode set");

            foreach ($setData['cards'] as $card) {
                $this->command->info("Seeding {$card['name']} card");

                $cardModel = new Card;
                $cardModel->fill($card);
                $cardModel->save();
            }
        }
    }
}
