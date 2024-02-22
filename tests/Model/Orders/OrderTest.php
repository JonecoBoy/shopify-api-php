<?php

namespace Joneco\Shopify\Tests\Model\Orders;

use Joneco\Shopify\Model\Orders\Order;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class OrderTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Order::class;
    }
}