<?php

namespace Joneco\Shopify\Tests\Model\Shipping\Common;

use Joneco\Shopify\Model\Shipping\Common\Destination;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class DestinationTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Destination::class;
    }
}