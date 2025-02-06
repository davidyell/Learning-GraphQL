<?php

declare(strict_types=1);

namespace Tests\Feature\Api;

use App\Models\Card;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class CardTest extends TestCase
{
    public function test_can_paginate_cards(): void
    {
        Sanctum::actingAs(
            User::factory()->create(),
            ['*']
        );

        Card::factory()->count(10)->create();
        $this->assertDatabaseCount('cards', 10);

        $response = $this->graphQL('
            {
              cards(first:5, page: 1) {
                data {
                  id
                  name
                  types
                }
                paginatorInfo {
                  currentPage
                  lastPage
                  total
                }
              }
            }
        ')->assertOk();

        $cards = $response->json('data.cards.data');
        $pagination = $response->json('data.cards.paginatorInfo');

        $this->assertCount(5, $cards);
        $this->assertSame(1, $pagination['currentPage']);
        $this->assertSame(2, $pagination['lastPage']);
        $this->assertSame(10, $pagination['total']);
    }

    public function test_can_search_for_cards(): void
    {
        Sanctum::actingAs(
            User::factory()->create(),
            ['*']
        );

        Card::factory()
            ->count(5)
            ->state(new Sequence(
                ['name' => 'Dragon Whelp', 'colors' => ['R']],
                ['name' => 'Archive Dragon', 'colors' => ['U']],
                ['name' => 'Decadent Dragon // Expensive Taste', 'colors' => ['R']],
                ['name' => 'Decadent Dragon // Expensive Taste', 'colors' => ['B']],
                ['name' => 'Swordsworn Cavalier', 'colors' => ['W']],
            ))
            ->create();
        $this->assertDatabaseCount('cards', 5);

        $response = $this->graphQL('
            {
              cardSearch(name: "dragon", colors: ["R", "U"]) {
                id
                name
                type
                colors
              }
            }
        ')->assertOk();

        $cards = $response->json('data.cardSearch');

        $this->assertCount(3, $cards);
    }

    public function test_deny_public_access(): void
    {
        Card::factory()->count(3)->create();
        $this->assertDatabaseCount('cards', 3);

        $response = $this->graphQL('
            {
              cardSearch(name: "dragon", colors: ["R", "U"]) {
                id
                name
                type
                colors
              }
            }
        ')->assertUnauthorized();
    }
}
