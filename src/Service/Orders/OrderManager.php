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

use Joneco\Shopify\Model\Orders\Order;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class OrderManager extends GeneralCurdManager implements OrderManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Order::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function open($id)
    {
        $data = $this->client->post("orders/{$id}/open", []);

        return $this->fromArray($data['order']);
    }

    /**
     * {@inheritdoc}
     */
    public function close($id)
    {
        $data = $this->client->post("orders/{$id}/close", []);

        return $this->fromArray($data['order']);
    }

    /**
     * {@inheritdoc}
     */
    public function cancel($id)
    {
        $data = $this->client->post("orders/{$id}/cancel", []);

        return $this->fromArray($data['order']);
    }
}
