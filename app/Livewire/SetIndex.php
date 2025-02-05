<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Set;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Livewire\Component;

class SetIndex extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(Set::query())
            ->columns([
                ViewColumn::make('keyruneCode')
                    ->view('filament.tables.columns.set-keyrune'),
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->url(fn ($record) => route('card.index', ['setCode' => $record->code])),
                TextColumn::make('code')
                    ->badge()
                    ->color('gray'),
                TextColumn::make('releaseDate')
                    ->since()
                    ->dateTooltip()
                    ->sortable(),
                TextColumn::make('block'),
                TextColumn::make('type')
                    ->badge()
                    ->color('gray'),
                TextColumn::make('totalSetSize')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options(
                        Set::query()
                            ->select(['type'])
                            ->distinct()
                            ->get()
                            ->pluck('type', 'type')
                    ),
            ])
            ->defaultPaginationPageOption(50);
    }

    public function render()
    {
        return view('livewire.set-index')->layout('layouts.app');
    }
}
