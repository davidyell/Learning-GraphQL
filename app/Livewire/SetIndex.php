<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Set;
use Livewire\Component;
use Livewire\WithPagination;

class SetIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.set-index', ['sets' => Set::with('cards')->paginate(30)])
            ->layout('layouts.app');
    }
}
