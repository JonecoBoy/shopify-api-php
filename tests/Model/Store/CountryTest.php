<?php

namespace Joneco\Shopify\Tests\Model\Store;

use Joneco\Shopify\Model\Store\Country;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CountryTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Country::class;
    }
}