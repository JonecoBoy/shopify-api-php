<?php

namespace Joneco\Shopify\Tests\Model\Store;

use Joneco\Shopify\Model\Store\Currency;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CurrencyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Currency::class;
    }
}