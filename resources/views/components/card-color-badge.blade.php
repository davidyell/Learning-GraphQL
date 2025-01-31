@props(['color'])

@php
    $colorClasses = [
        'red' => 'bg-red-50 text-red-700 ring-red-700/10',
        'blue' => 'bg-blue-50 text-blue-700 ring-blue-700/10',
        'green' => 'bg-green-50 text-green-700 ring-green-700/10',
        'white' => 'bg-yellow-50 text-yellow-700 ring-yellow-700/10',
        'black' => 'bg-slate-50 text-slate-700 ring-slate-700/10',
    ];

    $classes = $colorClasses[Str::lower($color)] ?? 'bg-gray-50 text-gray-700 ring-gray-700/10';
@endphp

<span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium {{ $classes }} ring-1 ring-inset">{{ $color }}</span>
