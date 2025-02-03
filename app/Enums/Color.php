<?php

namespace App\Enums;

enum Color: string
{
    case White = 'W';
    case Blue = 'U';
    case Black = 'B';
    case Red = 'R';
    case Green = 'G';

    /**
     * @param  array<int, 'W'|'B'|'U'|'G'|'R'>  $colors
     */
    public static function labels(array $colors): string
    {
        return implode(', ', array_map(
            fn (string $colorCode) => \App\Enums\Color::from($colorCode)->name,
            $colors
        ));
    }
}
