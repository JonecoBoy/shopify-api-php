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

use Joneco\Shopify\Model\Customers\CustomerSavedSearch;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class CustomerSavedSearchManager extends GeneralCurdManager implements CustomerSavedSearchManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'customer_saved_searches';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'customer_saved_search';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return CustomerSavedSearch::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomers($id)
    {
        $data = $this->client->get("customer_saved_searches/{$id}/customers");

        return $this->createMany($data['customers']);
    }
}
