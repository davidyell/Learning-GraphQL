<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Card
 *
 * @property string|null $artist
 * @property array|null $artistIds
 * @property string|null $asciiName
 * @property array|null $attractionLights
 * @property array $availability
 * @property array|null $boosterTypes
 * @property string $borderColor
 * @property array|null $cardParts
 * @property array $colorIdentity
 * @property array|null $colorIndicator
 * @property array $colors
 * @property float $convertedManaCost
 * @property string|null $defense
 * @property string|null $duelDeck
 * @property int|null $edhrecRank
 * @property float|null $edhrecSaltiness
 * @property float|null $faceConvertedManaCost
 * @property string|null $faceFlavorName
 * @property float|null $faceManaValue
 * @property string|null $faceName
 * @property array $finishes
 * @property string|null $flavorName
 * @property string|null $flavorText
 * @property array|null $foreignData
 * @property array|null $frameEffects
 * @property string $frameVersion
 * @property string|null $hand
 * @property bool|null $hasAlternativeDeckLimit
 * @property bool|null $hasContentWarning
 * @property bool $hasFoil
 * @property bool $hasNonFoil
 * @property array $identifiers
 * @property bool|null $isAlternative
 * @property bool|null $isFullArt
 * @property bool|null $isFunny
 * @property bool|null $isOnlineOnly
 * @property bool|null $isOversized
 * @property bool|null $isPromo
 * @property bool|null $isRebalanced
 * @property bool|null $isReprint
 * @property bool|null $isReserved
 * @property bool|null $isStarter
 * @property bool|null $isStorySpotlight
 * @property bool|null $isTextless
 * @property bool|null $isTimeshifted
 * @property array|null $keywords
 * @property string $language
 * @property string $layout
 * @property array|null $leadershipSkills
 * @property array $legalities
 * @property string|null $life
 * @property string|null $loyalty
 * @property string|null $manaCost
 * @property float $manaValue
 * @property string $name
 * @property string $number
 * @property array|null $originalPrintings
 * @property string|null $originalReleaseDate
 * @property string|null $originalText
 * @property string|null $originalType
 * @property array|null $otherFaceIds
 * @property string|null $power
 * @property array|null $printings
 * @property array|null $promoTypes
 * @property array $purchaseUrls
 * @property string $rarity
 * @property array|null $relatedCards
 * @property array|null $rebalancedPrintings
 * @property array|null $rulings
 * @property string|null $securityStamp
 * @property string $setCode
 * @property string|null $side
 * @property string|null $signature
 * @property array|null $sourceProducts
 * @property array|null $subsets
 * @property array $subtypes
 * @property array $supertypes
 * @property string|null $text
 * @property string|null $toughness
 * @property string $type
 * @property array $types
 * @property string $uuid
 * @property array|null $variations
 * @property string|null $watermark
 */
class Card extends Model
{
    /** @use HasFactory<\Database\Factories\CardFactory> */
    use HasFactory;

    protected $fillable = [
        'artist',
        'artistIds',
        'asciiName',
        'attractionLights',
        'availability',
        'boosterTypes',
        'borderColor',
        'cardParts',
        'colorIdentity',
        'colorIndicator',
        'colors',
        'convertedManaCost',
        'defense',
        'duelDeck',
        'edhrecRank',
        'edhrecSaltiness',
        'faceConvertedManaCost',
        'faceFlavorName',
        'faceManaValue',
        'faceName',
        'finishes',
        'flavorName',
        'flavorText',
        'foreignData',
        'frameEffects',
        'frameVersion',
        'hand',
        'hasAlternativeDeckLimit',
        'hasContentWarning',
        'hasFoil',
        'hasNonFoil',
        'identifiers',
        'isAlternative',
        'isFullArt',
        'isFunny',
        'isOnlineOnly',
        'isOversized',
        'isPromo',
        'isRebalanced',
        'isReprint',
        'isReserved',
        'isStarter',
        'isStorySpotlight',
        'isTextless',
        'isTimeshifted',
        'keywords',
        'language',
        'layout',
        'leadershipSkills',
        'legalities',
        'life',
        'loyalty',
        'manaCost',
        'manaValue',
        'name',
        'number',
        'originalPrintings',
        'originalReleaseDate',
        'originalText',
        'originalType',
        'otherFaceIds',
        'power',
        'printings',
        'promoTypes',
        'purchaseUrls',
        'rarity',
        'relatedCards',
        'rebalancedPrintings',
        'rulings',
        'securityStamp',
        'setCode',
        'side',
        'signature',
        'sourceProducts',
        'subsets',
        'subtypes',
        'supertypes',
        'text',
        'toughness',
        'type',
        'types',
        'uuid',
        'variations',
        'watermark',
    ];

    protected function casts(): array
    {
        return [
            'artistIds' => 'array',
            'attractionLights' => 'array',
            'availability' => 'array',
            'boosterTypes' => 'array',
            'cardParts' => 'array',
            'colorIdentity' => 'array',
            'colorIndicator' => 'array',
            'colors' => 'array',
            'finishes' => 'array',
            'foreignData' => 'array',
            'frameEffects' => 'array',
            'identifiers' => 'array',
            'keywords' => 'array',
            'leadershipSkills' => 'array',
            'legalities' => 'array',
            'originalPrintings' => 'array',
            'otherFaceIds' => 'array',
            'printings' => 'array',
            'promoTypes' => 'array',
            'purchaseUrls' => 'array',
            'relatedCards' => 'array',
            'rebalancedPrintings' => 'array',
            'rulings' => 'array',
            'sourceProducts' => 'array',
            'subsets' => 'array',
            'subtypes' => 'array',
            'supertypes' => 'array',
            'types' => 'array',
            'variations' => 'array',
        ];
    }
}
