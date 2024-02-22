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

use Joneco\Shopify\Model\Billing\ApplicationCredit;

interface ApplicationCreditManagerInterface
{
    /**
     * Gets all application credits.
     *
     * @param array $query
     *
     * @return ApplicationCredit[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the application credit by its id.
     *
     * @param int $id
     *
     * @return ApplicationCredit
     */
    public function find($id);

    /**
     * Creates a application credit.
     *
     * @param array $data
     *
     * @return ApplicationCredit
     */
    public function create(array $data);
}
