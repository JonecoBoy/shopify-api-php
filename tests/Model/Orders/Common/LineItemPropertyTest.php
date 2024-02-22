<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\LineItemProperty;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class LineItemPropertyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return LineItemProperty::class;
    }
}