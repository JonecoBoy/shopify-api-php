<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\DiscountCode;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class DiscountCodeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return DiscountCode::class;
    }
}