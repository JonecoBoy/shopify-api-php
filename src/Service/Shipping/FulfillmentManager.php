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

use Joneco\Shopify\Model\Shipping\Fulfillment;
use Joneco\Shopify\Service\Common\NestCrudManager;

class FulfillmentManager extends NestCrudManager implements FulfillmentManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'fulfillments';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Fulfillment::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'fulfillment';
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
    public function open($orderId, $id)
    {
        $data = $this->client->post("orders/{$orderId}/fulfillments/{$id}/open", []);

        return $this->fromArray($data['fulfillment']);
    }

    /**
     * {@inheritdoc}
     */
    public function cancel($orderId, $id)
    {
        $data = $this->client->post("orders/{$orderId}/fulfillments/{$id}/cancel", []);

        return $this->fromArray($data['fulfillment']);
    }

    /**
     * {@inheritdoc}
     */
    public function complete($orderId, $id)
    {
        $data = $this->client->post("orders/{$orderId}/fulfillments/{$id}/complete", []);

        return $this->fromArray($data['fulfillment']);
    }
}
