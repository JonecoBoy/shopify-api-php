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
namespace Joneco\Shopify\Model\Store\Common;

class PriceBasedShippingRate
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var int
     */
    protected $shippingZoneId;

    /**
     * @var string
     */
    protected $minOrderSubtotal;

    /**
     * @var string
     */
    protected $maxOrderSubtotal;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(?string $price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getShippingZoneId(): ?int
    {
        return $this->shippingZoneId;
    }

    /**
     * @param int $shippingZoneId
     */
    public function setShippingZoneId(?int $shippingZoneId)
    {
        $this->shippingZoneId = $shippingZoneId;
    }

    /**
     * @return string
     */
    public function getMinOrderSubtotal(): ?string
    {
        return $this->minOrderSubtotal;
    }

    /**
     * @param string $minOrderSubtotal
     */
    public function setMinOrderSubtotal(?string $minOrderSubtotal)
    {
        $this->minOrderSubtotal = $minOrderSubtotal;
    }

    /**
     * @return string
     */
    public function getMaxOrderSubtotal(): ?string
    {
        return $this->maxOrderSubtotal;
    }

    /**
     * @param string $maxOrderSubtotal
     */
    public function setMaxOrderSubtotal(?string $maxOrderSubtotal)
    {
        $this->maxOrderSubtotal = $maxOrderSubtotal;
    }
}