<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\CheckoutShippingLine;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CheckoutShippingLineTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CheckoutShippingLine::class;
    }
}