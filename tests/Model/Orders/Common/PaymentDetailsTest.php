<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\PaymentDetails;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class PaymentDetailsTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return PaymentDetails::class;
    }
}