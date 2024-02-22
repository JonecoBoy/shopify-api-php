<?php

namespace Joneco\Shopify\Tests\Model\Store;

use Joneco\Shopify\Model\Store\ShippingZone;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ShippingZoneTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ShippingZone::class;
    }
}