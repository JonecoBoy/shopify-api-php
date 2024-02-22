<?php

namespace Joneco\Shopify\Tests\Model\Orders;

use Joneco\Shopify\Model\Orders\Checkout;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CheckoutTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Checkout::class;
    }
}