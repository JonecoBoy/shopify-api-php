<?php

namespace Joneco\Shopify\Tests\Model\Billing;

use Joneco\Shopify\Model\Billing\UsageCharge;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class UsageChargeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return UsageCharge::class;
    }
}