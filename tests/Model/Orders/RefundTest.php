<?php

namespace Joneco\Shopify\Tests\Model\Orders;

use Joneco\Shopify\Model\Orders\Refund;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class RefundTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Refund::class;
    }
}