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

use Joneco\Shopify\Model\Inventory\InventoryLevel;

interface InventoryLevelManagerInterface
{
    /**
     * Retrieves a list of inventory levels.
     *
     * @param array $query
     *
     * @return InventoryLevel[]
     */
    public function findAll(array $query = []);

    /**
     * Adjusts the inventory level of an inventory item at a location.
     *
     * @param array $data
     *
     * @return InventoryLevel
     */
    public function adjust(array $data);

    /**
     * Deletes an inventory level of an inventory item at a location.
     *
     * @param int $inventoryItemId
     * @param int $locationId
     */
    public function remove($inventoryItemId, $locationId);

    /**
     * Connects an inventory item to a location.
     *
     * @param array $data
     *
     * @return InventoryLevel
     */
    public function connect(array $data);

    /**
     * Sets the inventory level for an inventory item at a location.
     *
     * @param array $data
     *
     * @return InventoryLevel
     */
    public function set(array $data);
}
