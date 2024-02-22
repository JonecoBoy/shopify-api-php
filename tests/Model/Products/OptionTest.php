<?php

namespace Joneco\Shopify\Tests\Model\Products;

use Joneco\Shopify\Model\Products\Option;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class OptionTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Option::class;
    }
}