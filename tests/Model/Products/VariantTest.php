<?php

namespace Joneco\Shopify\Tests\Model\Products;

use Joneco\Shopify\Model\Products\Variant;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class VariantTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Variant::class;
    }
}