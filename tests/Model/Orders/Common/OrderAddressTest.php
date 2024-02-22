<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\OrderAddress;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class OrderAddressTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return OrderAddress::class;
    }
}