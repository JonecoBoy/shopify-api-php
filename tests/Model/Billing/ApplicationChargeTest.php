<?php

namespace Joneco\Shopify\Tests\Model\Billing;

use Joneco\Shopify\Model\Billing\ApplicationCharge;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ApplicationChargeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ApplicationCharge::class;
    }
}