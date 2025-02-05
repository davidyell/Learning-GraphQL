@php
    use Illuminate\Support\Str;$manaCost = $getRecord()->manaCost;

    $symbols = '';
    if ($manaCost !== '') {
        preg_match_all('/\{([^}]+)\}/', $manaCost, $matches);

        foreach ($matches[1] as $i => $symbol) {
            if (Str::contains($symbol, '/')) {
                $symbols .= '<i class="ms ms-cost ms-' . Str::lower(Str::replace('/', '', $symbol)) . '" key="' . $i . '"></i>';
            } else {
                $symbols .= '<i class="ms ms-cost ms-' . Str::lower($symbol) . '" key="' . $i . '"></i>';
            }
        }
    }
@endphp

<span class="mana-cost px-2 py-1" data-mana-cost="{{ $manaCost }}">{!! $symbols !!}</span>
