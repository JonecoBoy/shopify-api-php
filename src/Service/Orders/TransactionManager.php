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

use Joneco\Shopify\Model\Orders\Transaction;
use Joneco\Shopify\Service\Common\NestCrudManager;

class TransactionManager extends NestCrudManager implements TransactionManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'transactions';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Transaction::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'transaction';
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
    public function remove($orderId, $id)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function update($orderId, $id, array $data)
    {
        throw new \Exception('The action is not supported');
    }
}
