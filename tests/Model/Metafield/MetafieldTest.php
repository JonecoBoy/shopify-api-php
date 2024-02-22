<?php

namespace Joneco\Shopify\Tests\Model\Metafield;

use Joneco\Shopify\Model\Metafield\Metafield;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class MetafieldTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Metafield::class;
    }
}