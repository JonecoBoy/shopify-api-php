<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\OrderAdjustment;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class OrderAdjustmentTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return OrderAdjustment::class;
    }
}