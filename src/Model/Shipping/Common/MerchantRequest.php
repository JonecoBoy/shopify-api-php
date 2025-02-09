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

namespace Joneco\Shopify\Model\Shipping\Common;

class RequestOption
{
    /**
     * @var string
     */
    protected $shippingMethod;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var \DateTimeInterface
     */
    protected $date;

    /**
     * @return string
     */
    public function getShippingMethod(): ?string
    {
        return $this->shippingMethod;
    }

    /**
     * @param string $shippingMethod
     */
    public function setShippingMethod(?string $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
    }

    /**
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote(?string $note)
    {
        $this->note = $note;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     */
    public function setDate(?\DateTimeInterface $date)
    {
        $this->date = $date;
    }
}

class MerchantRequest
{
    /**
     * @var string
     */
    protected $message;

    /**
     * @var RequestOption[]
     */
    protected $requestOptions;

    /**
     * @var string
     */
    protected $kind;

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(?string $message)
    {
        $this->message = $message;
    }

    /**
     * @return array
     */
    public function getRequestOptions(): array
    {
        return $this->requestOptions;
    }

    /**
     * @param array $requestOptions
     */
    public function setRequestOptions(array $requestOptions)
    {
        $this->requestOptions = $requestOptions;
    }

    /**
     * @return string
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     */
    public function setKind(?string $kind)
    {
        $this->kind = $kind;
    }
}
