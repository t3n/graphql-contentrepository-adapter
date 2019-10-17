<?php

declare(strict_types=1);

namespace t3n\GraphQL\ContentRepositoryAdapter;

use Neos\ContentRepository\Domain\Service\Context;

class ContextInfo
{
    /**
     * @var Context|null
     */
    protected $context = null;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function getContext(): ?Context
    {
        return $this->context;
    }
}
