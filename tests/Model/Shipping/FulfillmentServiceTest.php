<?php

namespace Joneco\Shopify\Tests\Model\Shipping;

use Joneco\Shopify\Model\Shipping\FulfillmentService;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class FulfillmentServiceTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return FulfillmentService::class;
    }
}