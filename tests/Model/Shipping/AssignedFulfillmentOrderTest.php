<?php

namespace Joneco\Shopify\Tests\Model\Shipping;

use Joneco\Shopify\Model\Shipping\AssignedFulfillmentOrder;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class AssignedFulfillmentOrderTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return AssignedFulfillmentOrder::class;
    }
}