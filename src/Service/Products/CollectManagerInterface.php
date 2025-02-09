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

namespace Joneco\Shopify\Service\Products;

use Joneco\Shopify\Model\Products\Collect;

interface CollectManagerInterface
{
    /**
     * Gets all collects.
     *
     * @param array $query
     *
     * @return Collect[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the collect by its id.
     *
     * @param int $id
     *
     * @return Collect
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
     * Removes the collect.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a blog.
     *
     * @param array $data
     *
     * @return Collect
     */
    public function create(array $data);
}
