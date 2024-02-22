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

use Joneco\Shopify\Model\Store\Shop;
use Joneco\Shopify\Service\Common\AbstractManager;

class ShopManager extends AbstractManager implements ShopManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Shop::class;
    }

    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'shops';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'shop';
    }

    /**
     * {@inheritdoc}
     */
    public function get()
    {
        $data = $this->client->get('shop');

        return $this->fromArray($data['shop']);
    }
}
