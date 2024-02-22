<?php

namespace Joneco\Shopify\Tests\Model\Billing;

use Joneco\Shopify\Model\Billing\ApplicationCredit;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ApplicationCreditTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ApplicationCredit::class;
    }
}