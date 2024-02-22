<?php

namespace Joneco\Shopify\Tests\Model\Shipping\Common;

use Joneco\Shopify\Model\Shipping\Common\LineItem;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class LineItemTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return LineItem::class;
    }
}