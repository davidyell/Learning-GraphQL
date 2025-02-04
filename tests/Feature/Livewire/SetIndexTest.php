<?php

namespace Tests\Feature\Livewire;

use App\Livewire\SetIndex;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SetIndexTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(SetIndex::class)
            ->assertStatus(200);
    }
}
