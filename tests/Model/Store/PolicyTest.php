<?php

namespace Joneco\Shopify\Tests\Model\Store;

use Joneco\Shopify\Model\Store\Policy;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class PolicyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Policy::class;
    }
}