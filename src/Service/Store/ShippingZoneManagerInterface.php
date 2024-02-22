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

namespace Joneco\Shopify\Service\Store;

use Joneco\Shopify\Model\Store\ShippingZone;

interface ShippingZoneManagerInterface
{
    /**
     * Gets all policies.
     *
     * @param array $query
     *
     * @return ShippingZone[]
     */
    public function findAll(array $query = []);
}
