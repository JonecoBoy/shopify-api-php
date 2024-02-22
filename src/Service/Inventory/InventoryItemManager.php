<?php

declare(strict_types=1);

/*
 * This file is part of the Joneco/shopify-api-php
 *
 * (c) Joneco <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Joneco\Shopify\Service\Inventory;

use Joneco\Shopify\Model\Inventory\InventoryItem;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class InventoryItemManager extends GeneralCurdManager implements InventoryItemManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'inventory_items';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'inventory_item';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return InventoryItem::class;
    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function count(array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}
