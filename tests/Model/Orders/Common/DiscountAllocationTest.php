<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\DiscountAllocation;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class DiscountAllocationTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return DiscountAllocation::class;
    }
}