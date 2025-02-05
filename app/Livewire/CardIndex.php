<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Enums\Color;
use App\Models\Card;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class CardIndex extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(Card::query())
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('types')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('set.name'),
                ViewColumn::make('rarity')
                    ->view('filament.tables.columns.rarity-badge'),
                ViewColumn::make('colors')
                    ->view('filament.tables.columns.color-badge')
                    ->alignCenter()
                    ->tooltip(fn ($record) => implode(', ', $record->colors)),
                ViewColumn::make('manaCost')
                    ->view('filament.tables.columns.mana-cost')
                    ->alignCenter(),
            ])
            ->filters([
                SelectFilter::make('types')
                    ->options([
                        'Artifact' => 'Artifact',
                        'Battle' => 'Battle',
                        'Conspiracy' => 'Conspiracy',
                        'Creature' => 'Creature',
                        'Enchantment' => 'Enchantment',
                        'Instant' => 'Instant',
                        'Land' => 'Land',
                        'Phenomenon' => 'Phenomenon',
                        'Plane' => 'Plane',
                        'Planeswalker' => 'Planeswalker',
                        'Scheme' => 'Scheme',
                        'Sorcery' => 'Sorcery',
                        'Tribal' => 'Tribal',
                        'Vanguard' => 'Vanguard',
                    ])
                    ->multiple()
                    ->query(function (Builder $query, array $data) {
                        foreach ($data['values'] as $value) {
                            $query->orWhereRaw('JSON_CONTAINS(types, ?)', [json_encode($value)]);
                        }
                    }),
                SelectFilter::make('setCode')
                    ->label('Set')
                    ->relationship('set', 'name')
                    ->searchable()
                    ->preload()
                    ->default(request()->query('setCode')),
                SelectFilter::make('rarity')
                    ->options(Card::query()->select('rarity')->get()->pluck('rarity', 'rarity')->unique()),
                SelectFilter::make('colors')
                    ->options(Color::class)
                    ->multiple()
                    ->query(function (Builder $query, array $data) {
                        foreach ($data['values'] as $value) {
                            $query->whereRaw('JSON_CONTAINS(colors, ?)', [json_encode($value)]);
                        }
                    }),
            ])
            ->defaultPaginationPageOption(50);
    }

    public function render()
    {
        return view('livewire.card-index')->layout('layouts.app');
    }
}
