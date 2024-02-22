<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\DraftOrderShippingLine;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class DraftOrderShippingLineTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return DraftOrderShippingLine::class;
    }
}