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

namespace Joneco\Shopify\Service\Customers;

use Joneco\Shopify\Model\Customers\Customer;
use Joneco\Shopify\Model\Customers\CustomerSavedSearch;

interface CustomerSavedSearchManagerInterface
{
    /**
     * Gets all customer saved searches.
     *
     * @param array $query
     *
     * @return CustomerSavedSearch[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the customer saved search by its id.
     *
     * @param int $id
     *
     * @return CustomerSavedSearch
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
     * Updates the customer saved search.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the customer saved search.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a customer saved search.
     *
     * @param array $data
     *
     * @return CustomerSavedSearch
     */
    public function create(array $data);

    /**
     * Receive all Customers resulting from a Customer Saved Search.
     *
     * @param int $id
     *
     * @return Customer[]
     */
    public function getCustomers($id);
}
