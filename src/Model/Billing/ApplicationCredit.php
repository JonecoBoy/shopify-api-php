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

class ApplicationCredit
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $amount;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $test;

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
     * @return bool
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

    /**
     * @param bool $test
     */
    public function setTest(?bool $test)
    {
        $this->test = $test;
    }
}
