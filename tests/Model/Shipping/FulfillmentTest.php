<?php

namespace Joneco\Shopify\Tests\Model\Shipping;

use Joneco\Shopify\Model\Shipping\Fulfillment;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class FulfillmentTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Fulfillment::class;
    }
}