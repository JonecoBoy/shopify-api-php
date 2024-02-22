<?php

namespace Joneco\Shopify\Tests\Model\Store;

use Joneco\Shopify\Model\Store\Shop;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ShopTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Shop::class;
    }
}