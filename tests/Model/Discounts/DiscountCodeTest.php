<?php

namespace Joneco\Shopify\Tests\Model\Discounts;

use Joneco\Shopify\Model\Discounts\DiscountCode;
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