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

class DiscountApplication
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $valueType;

    /**
     * @var string
     */
    protected $allocationMethod;

    /**
     * @var string
     */
    protected $targetSelection;

    /**
     * @var string
     */
    protected $targetType;

    /**
     * @var string
     */
    protected $code;

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

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(?string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValueType(): ?string
    {
        return $this->valueType;
    }

    /**
     * @param string $valueType
     */
    public function setValueType(?string $valueType)
    {
        $this->valueType = $valueType;
    }

    /**
     * @return string
     */
    public function getAllocationMethod(): ?string
    {
        return $this->allocationMethod;
    }

    /**
     * @param string $allocationMethod
     */
    public function setAllocationMethod(?string $allocationMethod)
    {
        $this->allocationMethod = $allocationMethod;
    }

    /**
     * @return string
     */
    public function getTargetSelection(): ?string
    {
        return $this->targetSelection;
    }

    /**
     * @param string $targetSelection
     */
    public function setTargetSelection(?string $targetSelection)
    {
        $this->targetSelection = $targetSelection;
    }

    /**
     * @return string
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    /**
     * @param string $targetType
     */
    public function setTargetType(?string $targetType)
    {
        $this->targetType = $targetType;
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
}
