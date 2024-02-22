<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\DiscountApplication;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class DiscountApplicationTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return DiscountApplication::class;
    }
}