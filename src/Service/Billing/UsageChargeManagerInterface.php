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

namespace Joneco\Shopify\Service\Billing;

use Joneco\Shopify\Model\Billing\UsageCharge;

interface UsageChargeManagerInterface
{
    /**
     * Gets all usage charges.
     *
     * @param int $recurringApplicationChargeId
     * @param array $query
     *
     * @return UsageCharge[]
     */
    public function findAll($recurringApplicationChargeId, array $query = []);

    /**
     * Gets the usage charge by its id.
     *
     * @param int $recurringApplicationChargeId
     * @param int $id
     *
     * @return UsageCharge
     */
    public function find($recurringApplicationChargeId, $id);

    /**
     * Creates a usage charge.
     *
     * @param int $recurringApplicationChargeId
     * @param array $data
     *
     * @return UsageCharge
     */
    public function create($recurringApplicationChargeId, array $data);
}
