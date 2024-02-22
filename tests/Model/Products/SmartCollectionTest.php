<?php

namespace Joneco\Shopify\Tests\Model\Products;

use Joneco\Shopify\Model\Products\SmartCollection;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class SmartCollectionTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return SmartCollection::class;
    }
}