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

namespace Joneco\Shopify\Model\Common;

class PriceSet
{
    /**
     * @var Price
     */
    protected $shopMoney;

    /**
     * @var Price
     */
    protected $presentmentMoney;

    /**
     * @return Price
     */
    public function getShopMoney(): Price
    {
        return $this->shopMoney;
    }

    /**
     * @param Price $shopMoney
     */
    public function setShopMoney(Price $shopMoney)
    {
        $this->shopMoney = $shopMoney;
    }

    /**
     * @return Price
     */
    public function getPresentmentMoney(): Price
    {
        return $this->presentmentMoney;
    }

    /**
     * @param Price $presentmentMoney
     */
    public function setPresentmentMoney(Price $presentmentMoney)
    {
        $this->presentmentMoney = $presentmentMoney;
    }
}
