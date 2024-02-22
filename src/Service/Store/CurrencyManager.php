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

use Joneco\Shopify\Model\Store\Currency;
use Joneco\Shopify\Model\Store\ShippingZone;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class CurrencyManager extends GeneralCurdManager implements ShippingZoneManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'currencies';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Currency::class;
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function count(array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}
