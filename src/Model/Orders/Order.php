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
use Joneco\Shopify\Model\Common\PriceSet;
use Joneco\Shopify\Model\Customers\Customer;
use Joneco\Shopify\Model\Orders\Common\ClientDetails;
use Joneco\Shopify\Model\Orders\Common\DiscountAllocation;
use Joneco\Shopify\Model\Orders\Common\DiscountCode;
use Joneco\Shopify\Model\Orders\Common\LineItem;
use Joneco\Shopify\Model\Orders\Common\NoteAttribute;
use Joneco\Shopify\Model\Orders\Common\OrderAddress;
use Joneco\Shopify\Model\Orders\Common\PaymentDetails;
use Joneco\Shopify\Model\Orders\Common\ShippingLine;
use Joneco\Shopify\Model\Orders\Common\TaxLine;
use Joneco\Shopify\Model\Shipping\Fulfillment;

class Order
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var \DateTimeInterface
     */
    protected $closedAt;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var int
     */
    protected $number;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $gateway;

    /**
     * @var bool
     */
    protected $test;

    /**
     * @var string
     */
    protected $totalPrice;

    /**
     * @var string
     */
    protected $subtotalPrice;

    /**
     * @var int
     */
    protected $totalWeight;

    /**
     * @var string
     */
    protected $totalTax;

    /**
     * @var bool
     */
    protected $taxesIncluded;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $financialStatus;

    /**
     * @var bool
     */
    protected $confirmed;

    /**
     * @var string
     */
    protected $totalDiscounts;

    /**
     * @var string
     */
    protected $totalLineItemsPrice;

    /**
     * @var string
     */
    protected $cartToken;

    /**
     * @var bool
     */
    protected $buyerAcceptsMarketing;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $referringSite;

    /**
     * @var string
     */
    protected $landingSite;

    /**
     * @var \DateTimeInterface
     */
    protected $cancelledAt;

    /**
     * @var string
     */
    protected $cancelReason;

    /**
     * @var string
     */
    protected $totalPriceUsd;

    /**
     * @var string
     */
    protected $checkoutToken;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var int
     */
    protected $locationId;

    /**
     * @var string
     */
    protected $sourceIdentifier;

    /**
     * @var string
     */
    protected $sourceUrl;

    /**
     * @var \DateTimeInterface
     */
    protected $processedAt;

    /**
     * @var string
     */
    protected $deviceId;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $customLocale;

    /**
     * @var string
     */
    protected $appId;

    /**
     * @var string
     */
    protected $browserIp;

    /**
     * @var string
     */
    protected $landingSiteRef;

    /**
     * @var int
     */
    protected $orderNumber;

    /**
     * @var DiscountAllocation[]
     */
    protected $discountApplications;

    /**
     * @var DiscountCode[]
     */
    protected $discountCodes;

    /**
     * @var NoteAttribute[]
     */
    protected $noteAttributes;

    /**
     * @var array<string>
     */
    protected $paymentGatewayNames;

    /**
     * @var string
     */
    protected $processingMethod;

    /**
     * @var int
     */
    protected $checkoutId;

    /**
     * @var string
     */
    protected $sourceName;

    /**
     * @var string
     */
    protected $fulfillmentStatus;

    /**
     * @var TaxLine[]
     */
    protected $taxLines;

    /**
     * @var string
     */
    protected $tags;

    /**
     * @var string
     */
    protected $contactEmail;

    /**
     * @var string
     */
    protected $orderStatusUrl;

    /**
     * @var string
     */
    protected $presentmentCurrency;

    /**
     * @var PriceSet
     */
    protected $totalLineItemsPriceSet;

    /**
     * @var PriceSet
     */
    protected $totalDiscountsSet;

    /**
     * @var PriceSet
     */
    protected $totalShippingPriceSet;

    /**
     * @var PriceSet
     */
    protected $subtotalPriceSet;

    /**
     * @var PriceSet
     */
    protected $totalPriceSet;

    /**
     * @var PriceSet
     */
    protected $totalTaxSet;

    /**
     * @var LineItem[]
     */
    protected $lineItems;

    /**
     * @var Fulfillment[]
     */
    protected $fulfillments;

    /**
     * @var Refund[]
     */
    protected $refunds;

    /**
     * @var string
     */
    protected $totalTipReceived;

    /**
     * @var PriceSet
     */
    protected $originalTotalDutiesSet;

    /**
     * @var PriceSet
     */
    protected $currentTotalDutiesSet;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @var ShippingLine[]
     */
    protected $shippingLines;

    /**
     * @var OrderAddress
     */
    protected $billingAddress;

    /**
     * @var OrderAddress
     */
    protected $shippingAddress;

    /**
     * @var ClientDetails
     */
    protected $clientDetails;

    /**
     * @var PaymentDetails
     */
    protected $paymentDetails;

    /**
     * @var Transaction[]
     */
    protected $transactions;

    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id ?? null;
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
    public function getEmail(): ?string
    {
        return $this->email ?? null;
    }

    /**
     * @param string $email
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getClosedAt(): ?\DateTimeInterface
    {
        return $this->closedAt ?? null;
    }

    /**
     * @param \DateTimeInterface $closedAt
     */
    public function setClosedAt(?\DateTimeInterface $closedAt)
    {
        $this->closedAt = $closedAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt ?? null;
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt ?? null;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number ?? null;
    }

    /**
     * @param int $number
     */
    public function setNumber(?int $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note ?? null;
    }

    /**
     * @param string $note
     */
    public function setNote(?string $note)
    {
        $this->note = $note;
    }

    /**
     * @return string
     */
    public function getToken(): ?string
    {
        return $this->token ?? null;
    }

    /**
     * @param string $token
     */
    public function setToken(?string $token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getGateway(): ?string
    {
        return $this->gateway ?? null;
    }

    /**
     * @param string $gateway
     */
    public function setGateway(?string $gateway)
    {
        $this->gateway = $gateway;
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
    public function getTotalPrice(): ?string
    {
        return $this->totalPrice ?? null;
    }

    /**
     * @param string $totalPrice
     */
    public function setTotalPrice(?string $totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return string
     */
    public function getSubtotalPrice(): ?string
    {
        return $this->subtotalPrice ?? null;
    }

    /**
     * @param string $subtotalPrice
     */
    public function setSubtotalPrice(?string $subtotalPrice)
    {
        $this->subtotalPrice = $subtotalPrice;
    }

    /**
     * @return int
     */
    public function getTotalWeight(): ?int
    {
        return $this->totalWeight;
    }

    /**
     * @param int $totalWeight
     */
    public function setTotalWeight(?int $totalWeight)
    {
        $this->totalWeight = $totalWeight;
    }

    /**
     * @return string
     */
    public function getTotalTax(): ?string
    {
        return $this->totalTax ?? null;
    }

    /**
     * @param string $totalTax
     */
    public function setTotalTax(?string $totalTax)
    {
        $this->totalTax = $totalTax;
    }

    /**
     * @return bool
     */
    public function isTaxesIncluded(): ?bool
    {
        return $this->taxesIncluded;
    }

    /**
     * @param bool $taxesIncluded
     */
    public function setTaxesIncluded(?bool $taxesIncluded)
    {
        $this->taxesIncluded = $taxesIncluded;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency ?? null;
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
    public function getFinancialStatus(): ?string
    {
        return $this->financialStatus ?? null;
    }

    /**
     * @param string $financialStatus
     */
    public function setFinancialStatus(?string $financialStatus)
    {
        $this->financialStatus = $financialStatus;
    }

    /**
     * @return bool
     */
    public function isConfirmed(): ?bool
    {
        return $this->confirmed;
    }

    /**
     * @param bool $confirmed
     */
    public function setConfirmed(?bool $confirmed)
    {
        $this->confirmed = $confirmed;
    }

    /**
     * @return string
     */
    public function getTotalDiscounts(): ?string
    {
        return $this->totalDiscounts;
    }

    /**
     * @param string $totalDiscounts
     */
    public function setTotalDiscounts(?string $totalDiscounts)
    {
        $this->totalDiscounts = $totalDiscounts;
    }

    /**
     * @return string
     */
    public function getTotalLineItemsPrice(): ?string
    {
        return $this->totalLineItemsPrice;
    }

    /**
     * @param string $totalLineItemsPrice
     */
    public function setTotalLineItemsPrice(?string $totalLineItemsPrice)
    {
        $this->totalLineItemsPrice = $totalLineItemsPrice;
    }

    /**
     * @return string
     */
    public function getCartToken(): ?string
    {
        return $this->cartToken;
    }

    /**
     * @param string $cartToken
     */
    public function setCartToken(?string $cartToken)
    {
        $this->cartToken = $cartToken;
    }

    /**
     * @return bool
     */
    public function isBuyerAcceptsMarketing(): ?bool
    {
        return $this->buyerAcceptsMarketing;
    }

    /**
     * @param bool $buyerAcceptsMarketing
     */
    public function setBuyerAcceptsMarketing(?bool $buyerAcceptsMarketing)
    {
        $this->buyerAcceptsMarketing = $buyerAcceptsMarketing;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getReferringSite(): ?string
    {
        return $this->referringSite ?? null;
    }

    /**
     * @param string $referringSite
     */
    public function setReferringSite(?string $referringSite)
    {
        $this->referringSite = $referringSite;
    }

    /**
     * @return string
     */
    public function getLandingSite(): ?string
    {
        return $this->landingSite ?? null;
    }

    /**
     * @param string $landingSite
     */
    public function setLandingSite(?string $landingSite)
    {
        $this->landingSite = $landingSite;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCancelledAt(): ?\DateTimeInterface
    {
        return $this->cancelledAt ?? null;
    }

    /**
     * @param \DateTimeInterface $cancelledAt
     */
    public function setCancelledAt(?\DateTimeInterface $cancelledAt)
    {
        $this->cancelledAt = $cancelledAt;
    }

    /**
     * @return string
     */
    public function getCancelReason(): ?string
    {
        return $this->cancelReason ?? null;
    }

    /**
     * @param string $cancelReason
     */
    public function setCancelReason(?string $cancelReason)
    {
        $this->cancelReason = $cancelReason;
    }

    /**
     * @return string
     */
    public function getTotalPriceUsd(): ?string
    {
        return $this->totalPriceUsd ?? null;
    }

    /**
     * @param string $totalPriceUsd
     */
    public function setTotalPriceUsd(?string $totalPriceUsd)
    {
        $this->totalPriceUsd = $totalPriceUsd;
    }

    /**
     * @return string
     */
    public function getCheckoutToken(): ?string
    {
        return $this->checkoutToken ?? null;
    }

    /**
     * @param string $checkoutToken
     */
    public function setCheckoutToken(?string $checkoutToken)
    {
        $this->checkoutToken = $checkoutToken;
    }

    /**
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->reference ?? null;
    }

    /**
     * @param string $reference
     */
    public function setReference(?string $reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId ?? null;
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
    public function getLocationId(): ?int
    {
        return $this->locationId ?? null;
    }

    /**
     * @param int $locationId
     */
    public function setLocationId(?int $locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * @return string
     */
    public function getSourceIdentifier(): ?string
    {
        return $this->sourceIdentifier ?? null;
    }

    /**
     * @param string $sourceIdentifier
     */
    public function setSourceIdentifier(?string $sourceIdentifier)
    {
        $this->sourceIdentifier = $sourceIdentifier;
    }

    /**
     * @return string
     */
    public function getSourceUrl(): ?string
    {
        return $this->sourceUrl ?? null;
    }

    /**
     * @param string $sourceUrl
     */
    public function setSourceUrl(?string $sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getProcessedAt(): ?\DateTimeInterface
    {
        return $this->processedAt ?? null;
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
        return $this->deviceId ?? null;
    }

    /**
     * @param string $deviceId
     */
    public function setDeviceId(?string $deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone ?? null;
    }

    /**
     * @param string $phone
     */
    public function setPhone(?string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getCustomLocale(): ?string
    {
        return $this->customLocale ?? null;
    }

    /**
     * @param string $customLocale
     */
    public function setCustomLocale(?string $customLocale)
    {
        $this->customLocale = $customLocale;
    }

    /**
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId ?? null;
    }

    /**
     * @param string $appId
     */
    public function setAppId(?string $appId)
    {
        $this->appId = $appId;
    }

    /**
     * @return string
     */
    public function getBrowserIp(): ?string
    {
        return $this->browserIp ?? null;
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
    public function getLandingSiteRef(): ?string
    {
        return $this->landingSiteRef ?? null;
    }

    /**
     * @param string $landingSiteRef
     */
    public function setLandingSiteRef(?string $landingSiteRef)
    {
        $this->landingSiteRef = $landingSiteRef;
    }

    /**
     * @return int
     */
    public function getOrderNumber(): ?int
    {
        return $this->orderNumber ?? null;
    }

    /**
     * @param int $orderNumber
     */
    public function setOrderNumber(?int $orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return DiscountAllocation[]
     */
    public function getDiscountApplications(): array
    {
        return $this->discountApplications ?? [];
    }

    /**
     * @param DiscountAllocation[] $discountApplications
     */
    public function setDiscountApplications(array $discountApplications)
    {
        $this->discountApplications = $discountApplications;
    }

    /**
     * @return DiscountCode[]
     */
    public function getDiscountCodes(): array
    {
        return $this->discountCodes;
    }

    /**
     * @param DiscountCode[] $discountCodes
     */
    public function setDiscountCodes(array $discountCodes)
    {
        $this->discountCodes = $discountCodes;
    }

    /**
     * @return NoteAttribute[]
     */
    public function getNoteAttributes(): array
    {
        return $this->noteAttributes ?? [];
    }

    /**
     * @param NoteAttribute[] $noteAttributes
     */
    public function setNoteAttributes(array $noteAttributes)
    {
        $this->noteAttributes = $noteAttributes;
    }

    /**
     * @return array
     */
    public function getPaymentGatewayNames(): array
    {
        return $this->paymentGatewayNames ?? [];
    }

    /**
     * @param array $paymentGatewayNames
     */
    public function setPaymentGatewayNames(array $paymentGatewayNames)
    {
        $this->paymentGatewayNames = $paymentGatewayNames;
    }

    /**
     * @return string
     */
    public function getProcessingMethod(): ?string
    {
        return $this->processingMethod ?? null;
    }

    /**
     * @param string $processingMethod
     */
    public function setProcessingMethod(?string $processingMethod)
    {
        $this->processingMethod = $processingMethod;
    }

    /**
     * @return int
     */
    public function getCheckoutId(): ?int
    {
        return $this->checkoutId ?? null;
    }

    /**
     * @param int $checkoutId
     */
    public function setCheckoutId(?int $checkoutId)
    {
        $this->checkoutId = $checkoutId;
    }

    /**
     * @return string
     */
    public function getSourceName(): ?string
    {
        return $this->sourceName ?? null;
    }

    /**
     * @param string $sourceName
     */
    public function setSourceName(?string $sourceName)
    {
        $this->sourceName = $sourceName;
    }

    /**
     * @return string
     */
    public function getFulfillmentStatus(): ?string
    {
        return $this->fulfillmentStatus ?? null;
    }

    /**
     * @param string $fulfillmentStatus
     */
    public function setFulfillmentStatus(?string $fulfillmentStatus)
    {
        $this->fulfillmentStatus = $fulfillmentStatus;
    }

    /**
     * @return TaxLine[]
     */
    public function getTaxLines(): array
    {
        return $this->taxLines ?? [];
    }

    /**
     * @param TaxLine[] $taxLines
     */
    public function setTaxLines(array $taxLines)
    {
        $this->taxLines = $taxLines;
    }

    /**
     * @return string
     */
    public function getTags(): ?string
    {
        return $this->tags ?? null;
    }

    /**
     * @param string $tags
     */
    public function setTags(?string $tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getContactEmail(): ?string
    {
        return $this->contactEmail ?? null;
    }

    /**
     * @param string $contactEmail
     */
    public function setContactEmail(?string $contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * @return string
     */
    public function getOrderStatusUrl(): ?string
    {
        return $this->orderStatusUrl ?? null;
    }

    /**
     * @param string $orderStatusUrl
     */
    public function setOrderStatusUrl(?string $orderStatusUrl)
    {
        $this->orderStatusUrl = $orderStatusUrl;
    }

    /**
     * @return string
     */
    public function getPresentmentCurrency(): ?string
    {
        return $this->presentmentCurrency ?? null;
    }

    /**
     * @param string $presentmentCurrency
     */
    public function setPresentmentCurrency(?string $presentmentCurrency)
    {
        $this->presentmentCurrency = $presentmentCurrency;
    }

    /**
     * @return PriceSet
     */
    public function getTotalLineItemsPriceSet(): ?PriceSet
    {
        return $this->totalLineItemsPriceSet ?? null;
    }

    /**
     * @param PriceSet $totalLineItemsPriceSet
     */
    public function setTotalLineItemsPriceSet(?PriceSet $totalLineItemsPriceSet)
    {
        $this->totalLineItemsPriceSet = $totalLineItemsPriceSet;
    }

    /**
     * @return PriceSet
     */
    public function getTotalDiscountsSet(): ?PriceSet
    {
        return $this->totalDiscountsSet ?? null;
    }

    /**
     * @param PriceSet $totalDiscountsSet
     */
    public function setTotalDiscountsSet(?PriceSet $totalDiscountsSet)
    {
        $this->totalDiscountsSet = $totalDiscountsSet;
    }

    /**
     * @return PriceSet
     */
    public function getTotalShippingPriceSet(): ?PriceSet
    {
        return $this->totalShippingPriceSet ?? null;
    }

    /**
     * @param PriceSet $totalShippingPriceSet
     */
    public function setTotalShippingPriceSet(?PriceSet $totalShippingPriceSet)
    {
        $this->totalShippingPriceSet = $totalShippingPriceSet;
    }

    /**
     * @return PriceSet
     */
    public function getSubtotalPriceSet(): ?PriceSet
    {
        return $this->subtotalPriceSet ?? null;
    }

    /**
     * @param PriceSet $subtotalPriceSet
     */
    public function setSubtotalPriceSet(?PriceSet $subtotalPriceSet)
    {
        $this->subtotalPriceSet = $subtotalPriceSet;
    }

    /**
     * @return PriceSet
     */
    public function getTotalPriceSet(): ?PriceSet
    {
        return $this->totalPriceSet ?? null;
    }

    /**
     * @param PriceSet $totalPriceSet
     */
    public function setTotalPriceSet(?PriceSet $totalPriceSet)
    {
        $this->totalPriceSet = $totalPriceSet;
    }

    /**
     * @return PriceSet
     */
    public function getTotalTaxSet(): ?PriceSet
    {
        return $this->totalTaxSet ?? null;
    }

    /**
     * @param PriceSet $totalTaxSet
     */
    public function setTotalTaxSet(?PriceSet $totalTaxSet)
    {
        $this->totalTaxSet = $totalTaxSet;
    }

    /**
     * @return LineItem[]
     */
    public function getLineItems(): array
    {
        return $this->lineItems ?? [];
    }

    /**
     * @param LineItem[] $lineItems
     */
    public function setLineItems(array $lineItems)
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @return Fulfillment[]
     */
    public function getFulfillments(): array
    {
        return $this->fulfillments ?? [];
    }

    /**
     * @param Fulfillment[] $fulfillments
     */
    public function setFulfillments(array $fulfillments)
    {
        $this->fulfillments = $fulfillments;
    }

    /**
     * @return Refund[]
     */
    public function getRefunds(): array
    {
        return $this->refunds ?? [];
    }

    /**
     * @param Refund[] $refunds
     */
    public function setRefunds(array $refunds)
    {
        $this->refunds = $refunds;
    }

    /**
     * @return string
     */
    public function getTotalTipReceived(): ?string
    {
        return $this->totalTipReceived ?? null;
    }

    /**
     * @param string $totalTipReceived
     */
    public function setTotalTipReceived(?string $totalTipReceived)
    {
        $this->totalTipReceived = $totalTipReceived;
    }

    /**
     * @return PriceSet
     */
    public function getOriginalTotalDutiesSet(): ?PriceSet
    {
        return $this->originalTotalDutiesSet ?? null;
    }

    /**
     * @param PriceSet $originalTotalDutiesSet
     */
    public function setOriginalTotalDutiesSet(?PriceSet $originalTotalDutiesSet)
    {
        $this->originalTotalDutiesSet = $originalTotalDutiesSet;
    }

    /**
     * @return PriceSet
     */
    public function getCurrentTotalDutiesSet(): ?PriceSet
    {
        return $this->currentTotalDutiesSet ?? null;
    }

    /**
     * @param PriceSet $currentTotalDutiesSet
     */
    public function setCurrentTotalDutiesSet(?PriceSet $currentTotalDutiesSet)
    {
        $this->currentTotalDutiesSet = $currentTotalDutiesSet;
    }

    /**
     * @return string
     */
    public function getAdminGraphqlApiId(): ?string
    {
        return $this->adminGraphqlApiId ?? null;
    }

    /**
     * @param string $adminGraphqlApiId
     */
    public function setAdminGraphqlApiId(?string $adminGraphqlApiId)
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
    }

    /**
     * @return ShippingLine[]
     */
    public function getShippingLines(): array
    {
        return $this->shippingLines ?? [];
    }

    /**
     * @param ShippingLine[] $shippingLines
     */
    public function setShippingLines(array $shippingLines)
    {
        $this->shippingLines = $shippingLines;
    }

    /**
     * @return OrderAddress
     */
    public function getBillingAddress(): ?OrderAddress
    {
        return $this->billingAddress ?? null;
    }

    /**
     * @param OrderAddress $billingAddress
     */
    public function setBillingAddress(?OrderAddress $billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return OrderAddress
     */
    public function getShippingAddress(): ?OrderAddress
    {
        return $this->shippingAddress ?? null;
    }

    /**
     * @param OrderAddress $shippingAddress
     */
    public function setShippingAddress(?OrderAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return ClientDetails
     */
    public function getClientDetails(): ?ClientDetails
    {
        return $this->clientDetails ?? null;
    }

    /**
     * @param ClientDetails $clientDetails
     */
    public function setClientDetails(?ClientDetails $clientDetails)
    {
        $this->clientDetails = $clientDetails;
    }

    /**
     * @return PaymentDetails
     */
    public function getPaymentDetails(): ?PaymentDetails
    {
        return $this->paymentDetails ?? null;
    }

    /**
     * @param PaymentDetails $paymentDetails
     */
    public function setPaymentDetails(?PaymentDetails $paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;
    }

    /**
     * @return Transaction[]
     */
    public function getTransactions(): array
    {
        return $this->transactions ?? [];
    }

    /**
     * @param Transaction[] $transactions
     */
    public function setTransactions(array $transactions)
    {
        $this->transactions = $transactions;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer ?? null;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(?Customer $customer)
    {
        $this->customer = $customer ?? null;
    }
}
