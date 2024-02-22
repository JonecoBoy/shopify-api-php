<?php

namespace Joneco\Shopify\Tests\Model\Common;

use Joneco\Shopify\Model\Common\Price;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class PriceTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Price::class;
    }
}