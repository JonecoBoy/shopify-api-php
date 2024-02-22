<?php

namespace Joneco\Shopify\Tests\Model\Common;

use Joneco\Shopify\Model\Common\PriceSet;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class PriceSetTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return PriceSet::class;
    }
}