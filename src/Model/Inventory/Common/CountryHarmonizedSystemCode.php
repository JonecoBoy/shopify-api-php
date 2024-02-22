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

namespace Joneco\Shopify\Model\Inventory\Common;

class CountryHarmonizedSystemCode
{
    /**
     * @var string
     */
    protected $harmonizedSystemCode;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @return string
     */
    public function getHarmonizedSystemCode(): ?string
    {
        return $this->harmonizedSystemCode;
    }

    /**
     * @param string $harmonizedSystemCode
     */
    public function setHarmonizedSystemCode(?string $harmonizedSystemCode)
    {
        $this->harmonizedSystemCode = $harmonizedSystemCode;
    }

    /**
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(?string $countryCode)
    {
        $this->countryCode = $countryCode;
    }
}