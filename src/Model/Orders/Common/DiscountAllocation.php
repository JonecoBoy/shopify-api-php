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

class DiscountAllocation
{
    /**
     * @var string
     */
    protected $amount;

    /**
     * @var int
     */
    protected $discountApplicationIndex;

    /**
     * @var PriceSet
     */
    protected $amountSet;

    /**
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(?string $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getDiscountApplicationIndex(): ?int
    {
        return $this->discountApplicationIndex;
    }

    /**
     * @param int $discountApplicationIndex
     */
    public function setDiscountApplicationIndex(?int $discountApplicationIndex)
    {
        $this->discountApplicationIndex = $discountApplicationIndex;
    }

    /**
     * @return PriceSet
     */
    public function getAmountSet(): PriceSet
    {
        return $this->amountSet;
    }

    /**
     * @param PriceSet $amountSet
     */
    public function setAmountSet(PriceSet $amountSet)
    {
        $this->amountSet = $amountSet;
    }
}
