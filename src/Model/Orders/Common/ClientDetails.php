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

class ClientDetails
{
    /**
     * @var string
     */
    protected $browserIp;

    /**
     * @var string
     */
    protected $acceptLanguage;

    /**
     * @var string
     */
    protected $userAgent;

    /**
     * @var string
     */
    protected $sessionHash;

    /**
     * @var int
     */
    protected $browserWidth;

    /**
     * @var int
     */
    protected $browserHeight;

    /**
     * @return string
     */
    public function getBrowserIp(): ?string
    {
        return $this->browserIp;
    }

    /**
     * @param string $browserIp
     */
    public function setBrowserIp(?string $browserIp)
    {
        $this->browserIp = $browserIp;
    }

    /**
     * @return string
     */
    public function getAcceptLanguage(): ?string
    {
        return $this->acceptLanguage;
    }

    /**
     * @param string $acceptLanguage
     */
    public function setAcceptLanguage(?string $acceptLanguage)
    {
        $this->acceptLanguage = $acceptLanguage;
    }

    /**
     * @return string
     */
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent(?string $userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @return string
     */
    public function getSessionHash(): ?string
    {
        return $this->sessionHash;
    }

    /**
     * @param string $sessionHash
     */
    public function setSessionHash(?string $sessionHash)
    {
        $this->sessionHash = $sessionHash;
    }

    /**
     * @return int
     */
    public function getBrowserWidth(): ?int
    {
        return $this->browserWidth;
    }

    /**
     * @param int $browserWidth
     */
    public function setBrowserWidth(?int $browserWidth)
    {
        $this->browserWidth = $browserWidth;
    }

    /**
     * @return int
     */
    public function getBrowserHeight(): ?int
    {
        return $this->browserHeight;
    }

    /**
     * @param int $browserHeight
     */
    public function setBrowserHeight(?int $browserHeight)
    {
        $this->browserHeight = $browserHeight;
    }
}
