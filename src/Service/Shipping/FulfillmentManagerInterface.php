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

use Joneco\Shopify\Model\Shipping\Fulfillment;

interface FulfillmentManagerInterface
{
    /**
     * Finds fulfillments.
     *
     * @param int   $orderId
     * @param array $query
     *
     * @return Fulfillment[]
     */
    public function findAll($orderId, array $query = []);

    /**
     * Finds an fulfillment.
     *
     * @param int $orderId
     * @param int $id
     *
     * @return Fulfillment
     */
    public function find($orderId, $id);

    /**
     * Gets the count.
     *
     * @param int   $orderId
     * @param array $query
     *
     * @return int
     */
    public function count($orderId, array $query = []);

    /**
     * Updates the fulfillment.
     *
     * @param int   $orderId
     * @param int   $id
     * @param array $data
     *
     * @return Fulfillment
     */
    public function update($orderId, $id, array $data);

    /**
     * Creates a fulfillment.
     *
     * @param int   $orderId
     * @param array $data
     *
     * @return Fulfillment
     */
    public function create($orderId, array $data);

    /**
     * Transition a fulfillment from pending to open.
     *
     * @param int $orderId
     * @param int $id
     *
     * @return Fulfillment
     */
    public function open($orderId, $id);

    /**
     * Cancel a fulfillment.
     *
     * @param int $orderId
     * @param int $id
     *
     * @return Fulfillment
     */
    public function cancel($orderId, $id);

    /**
     * complete a fulfillment.
     *
     * @param int $orderId
     * @param int $id
     *
     * @return Fulfillment
     */
    public function complete($orderId, $id);
}
