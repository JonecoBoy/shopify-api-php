<?php

namespace Joneco\Shopify\Tests\Model\Shipping;

use Joneco\Shopify\Model\Shipping\FulfillmentEvent;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class FulfillmentEventTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return FulfillmentEvent::class;
    }
}