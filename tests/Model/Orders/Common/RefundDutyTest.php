<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\RefundDuty;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class RefundDutyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return RefundDuty::class;
    }
}