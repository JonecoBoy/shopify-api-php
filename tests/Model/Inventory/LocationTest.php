<?php

namespace Joneco\Shopify\Tests\Model\Inventory;

use Joneco\Shopify\Model\Inventory\Location;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class LocationTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Location::class;
    }
}