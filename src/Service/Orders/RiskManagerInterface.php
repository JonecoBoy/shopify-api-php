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

namespace Joneco\Shopify\Service\Orders;

use Joneco\Shopify\Model\Orders\Risk;

interface RiskManagerInterface
{
    /**
     * Finds order risks.
     *
     * @param int   $orderId
     * @param array $query
     *
     * @return Risk[]
     */
    public function findAll($orderId, array $query = []);

    /**
     * Finds an order risk.
     *
     * @param int $orderId
     * @param int $id
     *
     * @return Risk
     */
    public function find($orderId, $id);

    /**
     * Updates the order risk.
     *
     * @param int   $orderId
     * @param int   $id
     * @param array $data
     *
     * @return Risk
     */
    public function update($orderId, $id, array $data);

    /**
     * Removes the order risk by given blog id and.
     *
     * @param int $orderId
     * @param int $id
     */
    public function remove($orderId, $id);

    /**
     * Creates a order risk.
     *
     * @param int   $orderId
     * @param array $data
     *
     * @return Risk
     */
    public function create($orderId, array $data);
}
