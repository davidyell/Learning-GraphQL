@props(['manaCost'])

@php
    $symbols = '';
    if ($manaCost !== '') {
        $cleanCost = preg_replace('/[{}]+/', '', $manaCost);
        $symbolsArray = str_split($cleanCost);
        foreach ($symbolsArray as $i => $symbol) {
            $symbols .= '<i class="ms ms-cost ms-' . strtolower($symbol) . '" key="' . $i . '"></i>';
        }
    }
@endphp

<span class="mana-cost">{!! $symbols !!}</span>
