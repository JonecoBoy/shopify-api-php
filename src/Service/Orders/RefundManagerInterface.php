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

use Joneco\Shopify\Model\Orders\Refund;

interface RefundManagerInterface
{
    /**
     * Finds articles.
     *
     * @param int   $orderId
     * @param array $query
     *
     * @return Refund[]
     */
    public function findAll($orderId, array $query = []);

    /**
     * Finds an article.
     *
     * @param int $orderId
     * @param int $id
     *
     * @return Refund
     */
    public function find($orderId, $id);

    /**
     * Creates a article.
     *
     * @param int   $orderId
     * @param array $data
     *
     * @return Refund
     */
    public function create($orderId, array $data);

    /**
     * Calculate a refund.
     *
     * @param int   $orderId
     * @param array $data
     *
     * @return Refund
     */
    public function calculate($orderId, array $data);
}
