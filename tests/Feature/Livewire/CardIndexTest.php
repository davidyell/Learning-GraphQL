<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CardIndex;
use Livewire\Livewire;
use Tests\TestCase;

class CardIndexTest extends TestCase
{
    /** @test */
    public function cards_component_renders()
    {
        Livewire::test(CardIndex::class)
            ->assertStatus(200);
    }
}
