<?php

namespace App\Enums;

enum Rarity: string
{
    case C = 'Common';
    case U = 'Uncommon';
    case R = 'Rare';
    case M = 'Mythic Rare';
}
