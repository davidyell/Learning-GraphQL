<?php

namespace Database\Factories;

use App\Enums\Color;
use App\Enums\Rarity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'availability' => ['paper', 'mtgo'],
            'borderColor' => $this->faker->randomElement(['black', 'white', 'silver']),
            'colorIdentity' => $this->faker->randomElement(Color::cases()),
            'colors' => $this->faker->randomElement(Color::cases()),
            'convertedManaCost' => $this->faker->randomFloat(1, 0, 10),
            'finishes' => ['foil', 'nonfoil'],
            'frameVersion' => $this->faker->word,
            'hasFoil' => $this->faker->boolean,
            'hasNonFoil' => $this->faker->boolean,
            'identifiers' => ['scryfallId' => $this->faker->uuid],
            'language' => $this->faker->languageCode,
            'layout' => $this->faker->word,
            'legalities' => ['standard' => 'legal'],
            'manaValue' => $this->faker->randomFloat(1, 0, 10),
            'name' => $this->faker->word,
            'number' => $this->faker->randomDigitNotNull,
            'purchaseUrls' => ['tcgplayer' => $this->faker->url],
            'rarity' => $this->faker->randomElement(Rarity::cases()),
            'setCode' => $this->faker->word,
            'subtypes' => [$this->faker->word],
            'supertypes' => [$this->faker->word],
            'type' => $this->faker->word,
            'types' => [$this->faker->word],
            'uuid' => $this->faker->uuid,
        ];
    }
}
