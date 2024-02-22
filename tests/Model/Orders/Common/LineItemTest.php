<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\LineItem;
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