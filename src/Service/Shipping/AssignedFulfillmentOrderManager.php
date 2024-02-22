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

namespace Joneco\Shopify\Service\Shipping;

use Joneco\Shopify\Model\Shipping\AssignedFulfillmentOrder;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class AssignedFulfillmentOrderManager extends GeneralCurdManager implements AssignedFulfillmentOrderManagerInterface
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return AssignedFulfillmentOrder::class;
    }

    /**
     * @inheritDoc
     */
    protected function getResourceName()
    {
        return 'fulfillment_order';
    }

    /**
     * @inheritDoc
     */
    public static function getServiceName()
    {
        return 'assigned_fulfillment_orders';
    }
}
