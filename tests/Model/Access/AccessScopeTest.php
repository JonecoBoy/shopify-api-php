<?php

namespace Joneco\Shopify\Tests\Model\Access;

use Joneco\Shopify\Model\Access\AccessScope;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class AccessScopeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return AccessScope::class;
    }
}