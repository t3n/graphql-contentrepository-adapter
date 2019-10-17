<?php

declare(strict_types=1);

namespace t3n\GraphQL\ContentRepositoryAdapter\Resolver;

use Neos\ContentRepository\Domain\Factory\NodeFactory;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Domain\Repository\NodeDataRepository;
use Neos\ContentRepository\Domain\Repository\WorkspaceRepository;
use Neos\ContentRepository\Domain\Service\ContextFactory;
use Neos\Flow\Annotations as Flow;
use t3n\GraphQL\ContentRepositoryAdapter\Context\NodeContext;
use t3n\GraphQL\ResolverInterface;

class NodeQueriesResolver implements ResolverInterface
{
    /**
     * @Flow\Inject
     *
     * @var NodeDataRepository
     */
    protected $nodeDataRepository;

    /**
     * @Flow\Inject
     *
     * @var WorkspaceRepository
     */
    protected $workspaceRepository;

    /**
     * @Flow\Inject
     *
     * @var ContextFactory
     */
    protected $contextFactory;

    /**
     * @Flow\Inject
     *
     * @var NodeFactory
     */
    protected $nodeFactory;

    public function nodeByPath($_, array $args, NodeContext $context): ?NodeInterface
    {
        // todo implement it at some point
        $workspace = $this->workspaceRepository->findByIdentifier('live');
        $nodeData = $this->nodeDataRepository->findOneByPath($args['path'], $workspace);

        if ($nodeData === null) {
            return null;
        }

        // get context from context class
        return $this->nodeFactory->createFromNodeData($nodeData,  $context->getContext());
    }
}
