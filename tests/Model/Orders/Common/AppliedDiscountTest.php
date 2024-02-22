<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\AppliedDiscount;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class AppliedDiscountTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return AppliedDiscount::class;
    }
}