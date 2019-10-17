<?php

declare(strict_types=1);

namespace t3n\GraphQL\ContentRepositoryAdapter\Context;

use Neos\ContentRepository\Domain\Service\Context;
use Neos\ContentRepository\Domain\Service\ContextFactory;
use Neos\Flow\Annotations as Flow;
use t3n\GraphQL\Context as BaseContext;

class NodeContext extends BaseContext
{
    /**
     * @var Context|null
     */
    protected $context = null;

    /**
     * @Flow\Inject
     *
     * @var ContextFactory
     */
    protected $contextFactory;

    public function getContext(): Context
    {
        if ($this->context === null) {
            $this->context = $this->contextFactory->create();
        }

        return $this->context;
    }
}
