<?php

declare(strict_types=1);

namespace t3n\GraphQL\ContentRepositoryAdapter\Resolver;

use Neos\ContentRepository\Domain\Model\NodeInterface;
use t3n\GraphQL\ResolverInterface;

class NodeResolver implements ResolverInterface
{
    public function __resolveType(NodeInterface $node)
    {
        return preg_replace('/[^A-Za-z0-9 ]/', '', $node->getNodeType()->getName());
    }
}
