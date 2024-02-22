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

class RefundDuty
{
    /**
     * @var int
     */
    protected $dutyId;

    /**
     * @var string
     */
    protected $refundType;

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
     * @return string
     */
    public function getRefundType(): ?string
    {
        return $this->refundType;
    }

    /**
     * @param string $refundType
     */
    public function setRefundType(?string $refundType)
    {
        $this->refundType = $refundType;
    }
}
