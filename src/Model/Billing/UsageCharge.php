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

namespace Joneco\Shopify\Model\Billing;

class UsageCharge
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $billingOn;

    /**
     * @var float
     */
    protected $balanceUsed;

    /**
     * @var float
     */
    protected $balanceRemaining;

    /**
     * @var int
     */
    protected $riskLevel;

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
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
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
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBillingOn(): ?\DateTimeInterface
    {
        return $this->billingOn;
    }

    /**
     * @param \DateTimeInterface $billingOn
     */
    public function setBillingOn(?\DateTimeInterface $billingOn)
    {
        $this->billingOn = $billingOn;
    }

    /**
     * @return float
     */
    public function getBalanceUsed(): float
    {
        return $this->balanceUsed;
    }

    /**
     * @param float $balanceUsed
     */
    public function setBalanceUsed(float $balanceUsed)
    {
        $this->balanceUsed = $balanceUsed;
    }

    /**
     * @return float
     */
    public function getBalanceRemaining(): float
    {
        return $this->balanceRemaining;
    }

    /**
     * @param float $balanceRemaining
     */
    public function setBalanceRemaining(float $balanceRemaining)
    {
        $this->balanceRemaining = $balanceRemaining;
    }

    /**
     * @return int
     */
    public function getRiskLevel(): ?int
    {
        return $this->riskLevel;
    }

    /**
     * @param int $riskLevel
     */
    public function setRiskLevel(?int $riskLevel)
    {
        $this->riskLevel = $riskLevel;
    }
}
