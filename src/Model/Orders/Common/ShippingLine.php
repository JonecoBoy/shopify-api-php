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
namespace Joneco\Shopify\Model\Orders\Common;

use Joneco\Shopify\Model\Common\PriceSet;

class ShippingLine
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var PriceSet
     */
    protected $priceSet;

    /**
     * @var string
     */
    protected $discountedPrice;

    /**
     * @var PriceSet
     */
    protected $discountedPriceSet;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var TaxLine[]
     */
    protected $taxLines;

    /**
     * @var string
     */
    protected $carrierIdentifier;

    /**
     * @var string
     */
    protected $requestedFulfillmentServiceId;

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(?string $code)
    {
        $this->code = $code;
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
     * @return PriceSet
     */
    public function getPriceSet(): PriceSet
    {
        return $this->priceSet;
    }

    /**
     * @param PriceSet $priceSet
     */
    public function setPriceSet(PriceSet $priceSet)
    {
        $this->priceSet = $priceSet;
    }

    /**
     * @return string
     */
    public function getDiscountedPrice(): ?string
    {
        return $this->discountedPrice;
    }

    /**
     * @param string $discountedPrice
     */
    public function setDiscountedPrice(?string $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;
    }

    /**
     * @return PriceSet
     */
    public function getDiscountedPriceSet(): PriceSet
    {
        return $this->discountedPriceSet;
    }

    /**
     * @param PriceSet $discountedPriceSet
     */
    public function setDiscountedPriceSet(PriceSet $discountedPriceSet)
    {
        $this->discountedPriceSet = $discountedPriceSet;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(?string $source)
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
    }

    /**
     * @return TaxLine[]
     */
    public function getTaxLines(): array
    {
        return $this->taxLines;
    }

    /**
     * @param TaxLine[] $taxLines
     */
    public function setTaxLines(array $taxLines)
    {
        $this->taxLines = $taxLines;
    }

    /**
     * @return string
     */
    public function getCarrierIdentifier(): ?string
    {
        return $this->carrierIdentifier;
    }

    /**
     * @param string $carrierIdentifier
     */
    public function setCarrierIdentifier(?string $carrierIdentifier)
    {
        $this->carrierIdentifier = $carrierIdentifier;
    }

    /**
     * @return string
     */
    public function getRequestedFulfillmentServiceId(): ?string
    {
        return $this->requestedFulfillmentServiceId;
    }

    /**
     * @param string $requestedFulfillmentServiceId
     */
    public function setRequestedFulfillmentServiceId(?string $requestedFulfillmentServiceId)
    {
        $this->requestedFulfillmentServiceId = $requestedFulfillmentServiceId;
    }
}
