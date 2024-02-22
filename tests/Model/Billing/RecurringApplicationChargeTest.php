<?php

namespace Joneco\Shopify\Tests\Model\Billing;

use Joneco\Shopify\Model\Billing\RecurringApplicationCharge;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class RecurringApplicationChargeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return RecurringApplicationCharge::class;
    }
}