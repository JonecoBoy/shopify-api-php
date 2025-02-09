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
namespace Joneco\Shopify\Model\Orders;

use Joneco\Shopify\Model\Orders\Common\CurrencyExchangeAdjustment;
use Joneco\Shopify\Model\Orders\Common\PaymentDetails;

class Transaction
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $orderId;

    /**
     * @var string
     */
    protected $kind;

    /**
     * @var string
     */
    protected $gateway;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var bool
     */
    protected $test;

    /**
     * @var string
     */
    protected $authorization;

    /**
     * @var int
     */
    protected $locationId;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var int
     */
    protected $parentId;

    /**
     * @var \DateTimeInterface
     */
    protected $processedAt;

    /**
     * @var string
     */
    protected $deviceId;

    /**
     * @var array
     */
    protected $receipt;

    /**
     * @var string
     */
    protected $errorCode;

    /**
     * @var string
     */
    protected $sourceName;

    /**
     * @var CurrencyExchangeAdjustment
     */
    protected $currencyExchangeAdjustment;

    /**
     * @var string
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @var PaymentDetails
     */
    protected $paymentDetails;

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
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId(?int $orderId)
    {
        $this->orderId = $orderId;
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

    /**
     * @return string
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    /**
     * @param string $gateway
     */
    public function setGateway(?string $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(?string $status)
    {
        $this->status = $status;
    }

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
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return bool
     */
    public function isTest(): ?bool
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

    /**
     * @return string
     */
    public function getAuthorization(): ?string
    {
        return $this->authorization;
    }

    /**
     * @param string $authorization
     */
    public function setAuthorization(?string $authorization)
    {
        $this->authorization = $authorization;
    }

    /**
     * @return int
     */
    public function getLocationId(): ?int
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     */
    public function setLocationId(?int $locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(?int $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     */
    public function setParentId(?int $parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getProcessedAt(): ?\DateTimeInterface
    {
        return $this->processedAt;
    }

    /**
     * @param \DateTimeInterface $processedAt
     */
    public function setProcessedAt(?\DateTimeInterface $processedAt)
    {
        $this->processedAt = $processedAt;
    }

    /**
     * @return string
     */
    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    /**
     * @param string $deviceId
     */
    public function setDeviceId(?string $deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * @return array
     */
    public function getReceipt(): array
    {
        return $this->receipt;
    }

    /**
     * @param array $receipt
     */
    public function setReceipt(array $receipt)
    {
        $this->receipt = $receipt;
    }

    /**
     * @return string
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     */
    public function setErrorCode(?string $errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getSourceName(): ?string
    {
        return $this->sourceName;
    }

    /**
     * @param string $sourceName
     */
    public function setSourceName(?string $sourceName)
    {
        $this->sourceName = $sourceName;
    }

    /**
     * @return CurrencyExchangeAdjustment
     */
    public function getCurrencyExchangeAdjustment(): CurrencyExchangeAdjustment
    {
        return $this->currencyExchangeAdjustment;
    }

    /**
     * @param CurrencyExchangeAdjustment $currencyExchangeAdjustment
     */
    public function setCurrencyExchangeAdjustment(CurrencyExchangeAdjustment $currencyExchangeAdjustment)
    {
        $this->currencyExchangeAdjustment = $currencyExchangeAdjustment;
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
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(?string $currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getAdminGraphqlApiId(): ?string
    {
        return $this->adminGraphqlApiId;
    }

    /**
     * @param string $adminGraphqlApiId
     */
    public function setAdminGraphqlApiId(?string $adminGraphqlApiId)
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
    }

    /**
     * @return PaymentDetails
     */
    public function getPaymentDetails(): PaymentDetails
    {
        return $this->paymentDetails;
    }

    /**
     * @param PaymentDetails $paymentDetails
     */
    public function setPaymentDetails(PaymentDetails $paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;
    }
}
