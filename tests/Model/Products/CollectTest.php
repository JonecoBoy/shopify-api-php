<?php

namespace Joneco\Shopify\Tests\Model\Products;

use Joneco\Shopify\Model\Products\Collect;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CollectTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Collect::class;
    }
}