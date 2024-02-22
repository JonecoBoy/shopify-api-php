<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\CurrencyExchangeAdjustment;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CurrencyExchangeAdjustmentTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CurrencyExchangeAdjustment::class;
    }
}