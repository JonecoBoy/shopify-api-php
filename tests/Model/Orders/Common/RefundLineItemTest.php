<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\RefundLineItem;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class RefundLineItemTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return RefundLineItem::class;
    }
}