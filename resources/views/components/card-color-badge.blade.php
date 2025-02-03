@props(['colors'])

@php
    $classes = 'bg-gray-50 text-gray-700 ring-gray-700/10';

    $colorClasses = [
        'R' => 'bg-red-50 text-red-700 ring-red-700/10',
        'U' => 'bg-blue-50 text-blue-700 ring-blue-700/10',
        'G' => 'bg-green-50 text-green-700 ring-green-700/10',
        'W' => 'bg-yellow-50 text-yellow-700 ring-yellow-700/10',
        'B' => 'bg-slate-50 text-slate-700 ring-slate-700/10',

        'R/U' => 'bg-gradient-to-r from-red-50 to-blue-50 text-red-700 ring-red-700/10',
        'R/G' => 'bg-gradient-to-r from-red-50 to-green-50 text-red-700 ring-red-700/10',
        'R/W' => 'bg-gradient-to-r from-red-50 to-yellow-50 text-red-700 ring-red-700/10',
        'R/B' => 'bg-gradient-to-r from-red-50 to-slate-50 text-red-700 ring-red-700/10',

        'U/G' => 'bg-gradient-to-r from-blue-50 to-green-50 text-blue-700 ring-blue-700/10',
        'U/W' => 'bg-gradient-to-r from-blue-50 to-yellow-50 text-blue-700 ring-blue-700/10',
        'U/B' => 'bg-gradient-to-r from-blue-50 to-slate-50 text-blue-700 ring-blue-700/10',
        'U/R' => 'bg-gradient-to-r from-blue-50 to-red-50 text-blue-700 ring-blue-700/10',

        'G/U' => 'bg-gradient-to-r from-green-50 to-blue-50 text-green-700 ring-green-700/10',
        'G/W' => 'bg-gradient-to-r from-green-50 to-yellow-50 text-green-700 ring-green-700/10',
        'G/B' => 'bg-gradient-to-r from-green-50 to-slate-50 text-green-700 ring-green-700/10',
        'G/R' => 'bg-gradient-to-r from-green-50 to-red-50 text-green-700 ring-green-700/10',

        'W/U' => 'bg-gradient-to-r from-yellow-50 to-blue-50 text-yellow-700 ring-yellow-700/10',
        'W/G' => 'bg-gradient-to-r from-yellow-50 to-green-50 text-yellow-700 ring-yellow-700/10',
        'W/B' => 'bg-gradient-to-r from-yellow-50 to-slate-50 text-yellow-700 ring-yellow-700/10',
        'W/R' => 'bg-gradient-to-r from-yellow-50 to-red-50 text-yellow-700 ring-yellow-700/10',

        'B/U' => 'bg-gradient-to-r from-slate-50 to-blue-50 text-slate-700 ring-slate-700/10',
        'B/G' => 'bg-gradient-to-r from-slate-50 to-green-50 text-slate-700 ring-slate-700/10',
        'B/W' => 'bg-gradient-to-r from-slate-50 to-yellow-50 text-slate-700 ring-slate-700/10',
        'B/R' => 'bg-gradient-to-r from-slate-50 to-red-50 text-slate-700 ring-slate-700/10',
    ];

    if (count($colors) === 1) {
        $classes = $colorClasses[$colors[0]];
    } else if (count($colors) === 2) {
        $classes = $colorClasses[$colors[0] . '/' . $colors[1]];
    } else if (count($colors) > 2) {
        $classes = 'bg-white-100 text-white-600 ring-white-700/10';
    }
@endphp

@if(count($colors) > 0)
    <span class="w-full inline-flex items-center rounded-md px-2 py-1 text-xs font-medium {{ $classes }} ring-1 ring-inset">{{ App\Enums\Color::labels($colors) }}</span>
@endif
