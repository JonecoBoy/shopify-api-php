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

class Duty
{
    /**
     * @var int
     */
    protected $dutyId;

    /**
     * @var PriceSet
     */
    protected $amountSet;

    /**
     * @return int
     */
    public function getDutyId(): ?int
    {
        return $this->dutyId;
    }

    /**
     * @param int $dutyId
     */
    public function setDutyId(?int $dutyId)
    {
        $this->dutyId = $dutyId;
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
