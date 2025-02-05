<?php

declare(strict_types=1);

namespace Tests\Feature\Livewire;

use App\Livewire\CardIndex;
use Livewire\Livewire;
use Tests\TestCase;

class CardIndexTest extends TestCase
{
    public function test_card_component_renders()
    {
        Livewire::test(CardIndex::class)
            ->assertStatus(200);
    }
}
