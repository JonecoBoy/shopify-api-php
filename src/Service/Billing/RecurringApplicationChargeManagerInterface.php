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

use Joneco\Shopify\Model\Billing\RecurringApplicationCharge;

interface RecurringApplicationChargeManagerInterface
{
    /**
     * Gets all recurring application charges.
     *
     * @param array $query
     *
     * @return RecurringApplicationCharge[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the recurring application charge by its id.
     *
     * @param int $id
     *
     * @return RecurringApplicationCharge
     */
    public function find($id);

    /**
     * Updates the recurring application charge.
     *
     * @param int   $id
     * @param array $data
     *
     * @return RecurringApplicationCharge
     */
    public function update($id, array $data);

    /**
     * Cancels a recurring application charge.
     *
     * @param int $id
     * @return void
     */
    public function cancel($id);

    /**
     * Creates a recurring application charge.
     *
     * @param array $data
     *
     * @return RecurringApplicationCharge
     */
    public function create(array $data);

    /**
     * Activate a recurring application charge.
     *
     * @param int $id
     *
     * @return RecurringApplicationCharge
     */
    public function activate($id);

    /**
     * Updates the capped amount of an active recurring application charge.
     *
     * @param int $id
     * @param int $cappedAmount
     *
     * @return RecurringApplicationCharge
     */
    public function customize($id, $cappedAmount);
}
