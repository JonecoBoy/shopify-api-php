<?php

namespace Joneco\Shopify\Tests\Model\Orders;

use Joneco\Shopify\Model\Orders\DraftOrder;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class DraftOrderTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return DraftOrder::class;
    }
}