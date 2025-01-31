<?php

namespace App\Livewire;

use App\Models\Card;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class CardIndex extends Component
{
    /**
     * The cards.
     *
     * @var Collection<Card>
     */
    public Collection $cards;

    public function mount(): void
    {
        $this->cards = Card::all();
    }

    public function render()
    {
        return view('livewire.card-index')
            ->layout('layouts.app');
    }
}
