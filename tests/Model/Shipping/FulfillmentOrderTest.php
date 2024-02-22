<?php

namespace Joneco\Shopify\Tests\Model\Shipping;

use Joneco\Shopify\Model\Shipping\FulfillmentOrder;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class FulfillmentOrderTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return FulfillmentOrder::class;
    }
}