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

use Joneco\Shopify\Model\Products\Image;

interface ImageManagerInterface
{
    /**
     * Finds articles.
     *
     * @param int   $productId
     * @param array $query
     *
     * @return Image[]
     */
    public function findAll($productId, array $query = []);

    /**
     * Finds an product.
     *
     * @param int $productId
     * @param int $id
     *
     * @return Image
     */
    public function find($productId, $id);

    /**
     * Gets the count.
     *
     * @param int   $productId
     * @param array $query
     *
     * @return int
     */
    public function count($productId, array $query = []);

    /**
     * Updates the product.
     *
     * @param int   $productId
     * @param int   $id
     * @param array $data
     *
     * @return Image
     */
    public function update($productId, $id, array $data);

    /**
     * Removes the product by given id id and product id.
     *
     * @param int $productId
     * @param int $id
     */
    public function remove($productId, $id);

    /**
     * Creates a product.
     *
     * @param int   $productId
     * @param array $data
     *
     * @return Image
     */
    public function create($productId, array $data);
}
