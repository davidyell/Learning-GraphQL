@php use Illuminate\Support\Str; @endphp
@props(['rarity'])

@php
    $colorClasses = [
        'common' => 'bg-white text-gray-700 ring-gray-700/10',
        'uncommon' => 'bg-slate-50 text-slate-700 ring-slate-700/10',
        'rare' => 'bg-amber-50 text-amber-700 ring-amber-700/10',
        'mythic' => 'bg-orange-50 text-orange-700 ring-orange-700/10',
    ];

    $classes = $colorClasses[Str::lower($rarity)] ?? 'bg-gray-50 text-gray-700 ring-gray-700/10';
@endphp

<span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium {{ $classes }} ring-1 ring-inset">{{ $rarity }}</span>
