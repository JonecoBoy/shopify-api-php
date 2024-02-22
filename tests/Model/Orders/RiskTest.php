<?php

namespace Joneco\Shopify\Tests\Model\Orders;

use Joneco\Shopify\Model\Orders\Risk;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class RiskTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Risk::class;
    }
}