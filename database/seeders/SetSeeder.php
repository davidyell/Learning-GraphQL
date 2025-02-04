<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Exceptions\MissingDataFileException;
use App\Models\Set;
use Illuminate\Database\Seeder;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (! file_exists(database_path('SetList.json'))) {
            throw new MissingDataFileException('SetList.json file is missing in database directory, please download it from https://mtgjson.com/downloads/all-files/#setlist');
        }

        $data = json_decode(file_get_contents(database_path('SetList.json')), true);

        foreach ($data['data'] as $setData) {
            $this->command->info("Seeding {$setData['name']} set");

            $set = new Set;
            $set->fill($setData);
            $set->save();
        }
    }
}
