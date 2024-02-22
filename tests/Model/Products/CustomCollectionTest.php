<?php

namespace Joneco\Shopify\Tests\Model\Products;

use Joneco\Shopify\Model\Products\CustomCollection;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CustomCollectionTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CustomCollection::class;
    }
}