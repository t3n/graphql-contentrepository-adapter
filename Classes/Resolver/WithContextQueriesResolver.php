<?php

declare(strict_types=1);

namespace t3n\GraphQL\ContentRepositoryAdapter\Resolver;

use t3n\GraphQL\ResolverInterface;

class WithContextQueriesResolver implements ResolverInterface
{
    protected function node($_, $args, $context)
    {
        return null;
    }
}
