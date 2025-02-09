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

namespace Joneco\Shopify\Model\Discounts;

class DiscountCode
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $priceRuleId;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var int
     */
    protected $usageCount;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

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
     * @return int
     */
    public function getPriceRuleId(): ?int
    {
        return $this->priceRuleId;
    }

    /**
     * @param int $priceRuleId
     */
    public function setPriceRuleId(?int $priceRuleId)
    {
        $this->priceRuleId = $priceRuleId;
    }

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
     * @return int
     */
    public function getUsageCount(): ?int
    {
        return $this->usageCount;
    }

    /**
     * @param int $usageCount
     */
    public function setUsageCount(?int $usageCount)
    {
        $this->usageCount = $usageCount;
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
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}
