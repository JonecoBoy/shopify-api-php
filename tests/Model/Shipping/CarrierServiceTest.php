<?php

namespace Joneco\Shopify\Tests\Model\Shipping;

use Joneco\Shopify\Model\Shipping\CarrierService;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CarrierServiceTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CarrierService::class;
    }
}