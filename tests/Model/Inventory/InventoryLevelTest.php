<?php

namespace Joneco\Shopify\Tests\Model\Inventory;

use Joneco\Shopify\Model\Inventory\InventoryLevel;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class InventoryLevelTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return InventoryLevel::class;
    }
}