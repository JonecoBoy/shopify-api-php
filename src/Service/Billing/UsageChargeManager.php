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
use Joneco\Shopify\Service\Common\NestCrudManager;

class UsageChargeManager extends NestCrudManager implements UsageChargeManagerInterface
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return UsageCharge::class;
    }

    /**
     * @inheritDoc
     */
    protected function getResourceName()
    {
        return 'usage_charge';
    }

    /**
     * @inheritDoc
     */
    public function getParentResourceName()
    {
        return 'recurring_application_charge';
    }

    /**
     * @inheritDoc
     */
    public static function getServiceName()
    {
        return 'usage_charges';
    }
}
