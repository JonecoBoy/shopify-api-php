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

namespace Joneco\Shopify\Service\Orders;

use Joneco\Shopify\Model\Orders\Risk;
use Joneco\Shopify\Service\Common\NestCrudManager;

class RiskManager extends NestCrudManager implements RiskManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'order_risks';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Risk::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'risk';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function count($orderId, array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}
