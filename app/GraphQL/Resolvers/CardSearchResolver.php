<?php

declare(strict_types=1);

namespace App\GraphQL\Resolvers;

use App\Models\Card;
use Nuwave\Lighthouse\Execution\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class CardSearchResolver
{
    public function resolve(mixed $root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $query = Card::query();

        if (isset($args['name'])) {
            $query->where('name', 'like', '%'.$args['name'].'%');
        }

        if (isset($args['colors'])) {
            $colors = $args['colors'];
            $query->where(function ($q) use ($colors) {
                foreach ($colors as $color) {
                    $q->orWhereRaw('JSON_CONTAINS(colors, ?)', [json_encode($color)]);
                }
            });
        }

        return $query->get();
    }
}
