<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Set>
 */
class SetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'baseSetSize' => $this->faker->numberBetween(100, 300),
            'block' => $this->faker->optional()->word,
            'cardsphereSetId' => $this->faker->optional()->numberBetween(1, 1000),
            'code' => $this->faker->unique()->lexify('????'),
            'codeV3' => $this->faker->optional()->lexify('????'),
            'decks' => $this->faker->optional()->randomElements(['deck1', 'deck2', 'deck3']),
            'isForeignOnly' => $this->faker->optional()->boolean,
            'isFoilOnly' => $this->faker->boolean,
            'isNonFoilOnly' => $this->faker->optional()->boolean,
            'isOnlineOnly' => $this->faker->boolean,
            'isPaperOnly' => $this->faker->optional()->boolean,
            'isPartialPreview' => $this->faker->optional()->boolean,
            'keyruneCode' => $this->faker->lexify('????'),
            'languages' => $this->faker->optional()->randomElements(['en', 'es', 'fr', 'de']),
            'mcmId' => $this->faker->optional()->numberBetween(1, 1000),
            'mcmIdExtras' => $this->faker->optional()->numberBetween(1, 1000),
            'mcmName' => $this->faker->optional()->word,
            'mtgoCode' => $this->faker->optional()->lexify('????'),
            'name' => $this->faker->word,
            'parentCode' => $this->faker->optional()->lexify('????'),
            'releaseDate' => $this->faker->date,
            'sealedProduct' => $this->faker->optional()->randomElements(['product1', 'product2', 'product3']),
            'tcgplayerGroupId' => $this->faker->optional()->numberBetween(1, 1000),
            'totalSetSize' => $this->faker->numberBetween(100, 300),
            'tokenSetCode' => $this->faker->optional()->lexify('????'),
            'translations' => $this->faker->randomElements(['translation1', 'translation2', 'translation3']),
            'type' => $this->faker->word,
        ];
    }
}
