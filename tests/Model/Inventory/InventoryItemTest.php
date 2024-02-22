<?php

namespace Joneco\Shopify\Tests\Model\Inventory;

use Joneco\Shopify\Model\Inventory\InventoryItem;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class InventoryItemTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return InventoryItem::class;
    }
}