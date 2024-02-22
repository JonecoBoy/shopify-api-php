<?php

namespace Joneco\Shopify\Tests\Model\Products;

use Joneco\Shopify\Model\Products\Product;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ProductTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Product::class;
    }
}