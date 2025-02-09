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
use Joneco\Shopify\Model\Inventory\Location;

interface LocationManagerInterface
{
    /**
     * Gets all locations.
     *
     * @param array $query
     *
     * @return Location[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the location by its id.
     *
     * @param int $id
     *
     * @return Location
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @param array $query
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Gets the inventory levels of the location
     * @param int $id
     * @return InventoryLevel[]
     */
    public function getInventoryLevels($id);
}
