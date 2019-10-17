<?php

declare(strict_types=1);

namespace t3n\GraphQL\ContentRepositoryAdapter\Resolver;

use t3n\GraphQL\ContentRepositoryAdapter\Context\NodeContext;
use t3n\GraphQL\ResolverInterface;

class QueryResolver implements ResolverInterface
{
    public function node()
    {
        return true;
    }

    public function withContext($_, array $args, NodeContext $context)
    {
        // todo set context with args
        return true;
    }
}
