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
namespace Joneco\Shopify\Model\Shipping;

class CarrierService
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var bool
     */
    protected $serviceDiscovery;

    /**
     * @var string
     */
    protected $carrierServiceType;

    /**
     * @var string
     */
    protected $format;

    /**
     * @var string
     */
    protected $callbackUrl;

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive(?bool $active)
    {
        $this->active = $active;
    }

    /**
     * @return bool
     */
    public function isServiceDiscovery(): ?bool
    {
        return $this->serviceDiscovery;
    }

    /**
     * @param bool $serviceDiscovery
     */
    public function setServiceDiscovery(?bool $serviceDiscovery)
    {
        $this->serviceDiscovery = $serviceDiscovery;
    }

    /**
     * @return string
     */
    public function getCarrierServiceType(): ?string
    {
        return $this->carrierServiceType;
    }

    /**
     * @param string $carrierServiceType
     */
    public function setCarrierServiceType(?string $carrierServiceType)
    {
        $this->carrierServiceType = $carrierServiceType;
    }

    /**
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat(?string $format)
    {
        $this->format = $format;
    }

    /**
     * @return string
     */
    public function getCallbackUrl(): ?string
    {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     */
    public function setCallbackUrl(?string $callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
    }
}
