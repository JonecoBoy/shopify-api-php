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

class CurrencyExchangeAdjustment
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $adjustment;

    /**
     * @var string
     */
    protected $originalAmount;

    /**
     * @var string
     */
    protected $finalAmount;

    /**
     * @var string
     */
    protected $currency;

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
    public function getAdjustment(): ?string
    {
        return $this->adjustment;
    }

    /**
     * @param string $adjustment
     */
    public function setAdjustment(?string $adjustment)
    {
        $this->adjustment = $adjustment;
    }

    /**
     * @return string
     */
    public function getOriginalAmount(): ?string
    {
        return $this->originalAmount;
    }

    /**
     * @param string $originalAmount
     */
    public function setOriginalAmount(?string $originalAmount)
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * @return string
     */
    public function getFinalAmount(): ?string
    {
        return $this->finalAmount;
    }

    /**
     * @param string $finalAmount
     */
    public function setFinalAmount(?string $finalAmount)
    {
        $this->finalAmount = $finalAmount;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(?string $currency)
    {
        $this->currency = $currency;
    }
}
