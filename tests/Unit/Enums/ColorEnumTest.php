<?php

namespace Tests\Unit\Enums;

use App\Enums\Color;
use PHPUnit\Framework\TestCase;

class ColorEnumTest extends TestCase
{
    public function test_convert_color_code_to_label()
    {
        $codes = ['R', 'B'];
        $expected = 'Red, Black';

        $result = Color::labels($codes);

        $this->assertSame($expected, $result);
    }
}
