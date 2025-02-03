<?php

namespace App\Livewire;

use App\Models\Card;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class CardIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.card-index', ['cards' => Card::paginate(30)])
            ->layout('layouts.app');
    }
}
