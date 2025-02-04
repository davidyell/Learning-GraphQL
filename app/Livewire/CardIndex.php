<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Card;
use Livewire\Component;
use Livewire\WithPagination;

class CardIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.card-index', ['cards' => Card::with('set')->paginate(30)])
            ->layout('layouts.app');
    }
}
