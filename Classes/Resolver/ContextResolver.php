<?php

declare(strict_types=1);

namespace t3n\GraphQL\ContentRepositoryAdapter\Resolver;

use t3n\GraphQL\ResolverInterface;

class ContextResolver implements ResolverInterface
{
    public function dimensions()
    {
        return [];
    }
}
