<?php

namespace Database\Factories;

use App\Enums\Color;
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
            'availability' => json_encode(['paper', 'mtgo']),
            'borderColor' => $this->faker->randomElement(['black', 'white', 'silver']),
            'colorIdentity' => json_encode($this->faker->randomElement(Color::cases())),
            'colors' => json_encode($this->faker->randomElement(Color::cases())),
            'convertedManaCost' => $this->faker->randomFloat(1, 0, 10),
            'finishes' => json_encode(['foil', 'nonfoil']),
            'frameVersion' => $this->faker->word,
            'hasFoil' => $this->faker->boolean,
            'hasNonFoil' => $this->faker->boolean,
            'identifiers' => json_encode(['scryfallId' => $this->faker->uuid]),
            'language' => $this->faker->languageCode,
            'layout' => $this->faker->word,
            'legalities' => json_encode(['standard' => 'legal']),
            'manaValue' => $this->faker->randomFloat(1, 0, 10),
            'name' => $this->faker->word,
            'number' => $this->faker->randomDigitNotNull,
            'purchaseUrls' => json_encode(['tcgplayer' => $this->faker->url]),
            'rarity' => $this->faker->randomElement(['common', 'uncommon', 'rare', 'mythic']),
            'setCode' => $this->faker->word,
            'subtypes' => json_encode([$this->faker->word]),
            'supertypes' => json_encode([$this->faker->word]),
            'type' => $this->faker->word,
            'types' => json_encode([$this->faker->word]),
            'uuid' => $this->faker->uuid,
        ];
    }
}
