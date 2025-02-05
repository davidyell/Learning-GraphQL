<?php

declare(strict_types=1);

namespace Tests\Feature\Livewire;

use App\Livewire\SetIndex;
use Livewire\Livewire;
use Tests\TestCase;

class SetIndexTest extends TestCase
{
    public function test_set_component_renders()
    {
        Livewire::test(SetIndex::class)
            ->assertStatus(200);
    }
}
