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

namespace Joneco\Shopify\Service\Shipping;

use Joneco\Shopify\Model\Shipping\CarrierService;

interface CarrierServiceManagerInterface
{
    /**
     * Gets all carrier services.
     *
     * @param array $query
     *
     * @return CarrierService[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the carrier service by its id.
     *
     * @param int $id
     *
     * @return CarrierService
     */
    public function find($id);

    /**
     * Updates the carrier service.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the carrier service.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a carrier service.
     *
     * @param array $data
     *
     * @return CarrierService
     */
    public function create(array $data);
}
