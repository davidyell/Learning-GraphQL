<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Set
 *
 * @property int $baseSetSize
 * @property string|null $block
 * @property int|null $cardsphereSetId
 * @property string $code
 * @property string|null $codeV3
 * @property array|null $decks
 * @property bool|null $isForeignOnly
 * @property bool $isFoilOnly
 * @property bool|null $isNonFoilOnly
 * @property bool $isOnlineOnly
 * @property bool|null $isPaperOnly
 * @property bool|null $isPartialPreview
 * @property string $keyruneCode
 * @property array|null $languages
 * @property int|null $mcmId
 * @property int|null $mcmIdExtras
 * @property string|null $mcmName
 * @property string|null $mtgoCode
 * @property string $name
 * @property string|null $parentCode
 * @property string $releaseDate
 * @property array|null $sealedProduct
 * @property int|null $tcgplayerGroupId
 * @property int $totalSetSize
 * @property string|null $tokenSetCode
 * @property array $translations
 * @property string $type
 */
class Set extends Model
{
    /** @use HasFactory<\Database\Factories\SetFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'decks' => 'array',
            'languages' => 'array',
            'sealedProduct' => 'array',
            'translations' => 'array',
        ];
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class, 'setCode', 'code');
    }
}
