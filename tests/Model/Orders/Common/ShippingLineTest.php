<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\ShippingLine;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ShippingLineTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ShippingLine::class;
    }
}