<?php

namespace Joneco\Shopify\Tests\Model\Store;

use Joneco\Shopify\Model\Store\Province;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ProvinceTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Province::class;
    }
}