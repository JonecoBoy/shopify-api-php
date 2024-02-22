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

class DiscountCode
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $amount;

    /**
     * @var string
     */
    protected $type;

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
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(?string $type)
    {
        $this->type = $type;
    }
}
