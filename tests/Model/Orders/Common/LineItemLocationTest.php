<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\LineItemLocation;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class LineItemLocationTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return LineItemLocation::class;
    }
}