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

namespace Joneco\Shopify\Service\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Page;

interface PageManagerInterface
{
    /**
     * Gets all pages.
     *
     * @param array $query
     *
     * @return Page[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the page by its id.
     *
     * @param int $id
     *
     * @return Page
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
     * Updates the page.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the page.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a page.
     *
     * @param array $data
     *
     * @return Page
     */
    public function create(array $data);
}
