@php
    use Illuminate\Support\Str;

    $colors = $getRecord()->colors;

    $colorCount = count($colors);

    if ($colorCount > 0) {
        $colorLetters = implode('', $colors);
    }
@endphp

@if($colorCount> 0)
    <i class="ms ms-ci ms-ci-{{ $colorCount }} ms-ci-{{ Str::lower($colorLetters) }}"></i>
@endif
