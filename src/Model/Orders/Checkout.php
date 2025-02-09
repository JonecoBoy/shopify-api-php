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

use Joneco\Shopify\Model\Customers\Customer;
use Joneco\Shopify\Model\Discounts\DiscountCode;
use Joneco\Shopify\Model\Orders\Common\CheckoutShippingLine;
use Joneco\Shopify\Model\Orders\Common\LineItem;
use Joneco\Shopify\Model\Orders\Common\NoteAttribute;
use Joneco\Shopify\Model\Orders\Common\OrderAddress;
use Joneco\Shopify\Model\Orders\Common\TaxLine;

class Checkout
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $cartToken;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $gateway;

    /**
     * @var bool
     */
    protected $buyerAcceptsMarketing;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $landingSite;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var NoteAttribute[]
     */
    protected $noteAttributes;

    /**
     * @var string
     */
    protected $referringSite;

    /**
     * @var CheckoutShippingLine[]
     */
    protected $shippingLines;

    /**
     * @var bool
     */
    protected $taxesIncluded;

    /**
     * @var int
     */
    protected $totalWeight;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var \DateTimeInterface
     */
    protected $completedAt;

    /**
     * @var \DateTimeInterface
     */
    protected $closedAt;

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
    protected $customerLocale;

    /**
     * @var LineItem[]
     */
    protected $lineItems;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $abandonedCheckoutUrl;

    /**
     * @var DiscountCode[]
     */
    protected $discountCodes;

    /**
     * @var TaxLine[]
     */
    protected $taxLines;

    /**
     * @var string
     */
    protected $sourceName;

    /**
     * @var string
     */
    protected $presentmentCurrency;

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
    protected $totalPrice;

    /**
     * @var string
     */
    protected $totalTax;

    /**
     * @var string
     */
    protected $subtotalPrice;

    /**
     * @var string
     */
    protected $totalDuties;

    /**
     * @var OrderAddress
     */
    protected $billingAddress;

    /**
     * @var OrderAddress
     */
    protected $shippingAddress;

    /**
     * @var Customer
     */
    protected $customer;

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
    public function getToken(): ?string
    {
        return $this->token;
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
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
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
     * @return \DateTimeInterface
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getLandingSite(): ?string
    {
        return $this->landingSite;
    }

    /**
     * @param string $landingSite
     */
    public function setLandingSite(?string $landingSite)
    {
        $this->landingSite = $landingSite;
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
     * @return NoteAttribute[]
     */
    public function getNoteAttributes(): array
    {
        return $this->noteAttributes;
    }

    /**
     * @param NoteAttribute[] $noteAttributes
     */
    public function setNoteAttributes(array $noteAttributes)
    {
        $this->noteAttributes = $noteAttributes;
    }

    /**
     * @return string
     */
    public function getReferringSite(): ?string
    {
        return $this->referringSite;
    }

    /**
     * @param string $referringSite
     */
    public function setReferringSite(?string $referringSite)
    {
        $this->referringSite = $referringSite;
    }

    /**
     * @return CheckoutShippingLine[]
     */
    public function getShippingLines(): array
    {
        return $this->shippingLines;
    }

    /**
     * @param CheckoutShippingLine[] $shippingLines
     */
    public function setShippingLines(array $shippingLines)
    {
        $this->shippingLines = $shippingLines;
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
     * @return \DateTimeInterface
     */
    public function getCompletedAt(): ?\DateTimeInterface
    {
        return $this->completedAt;
    }

    /**
     * @param \DateTimeInterface $completedAt
     */
    public function setCompletedAt(?\DateTimeInterface $completedAt)
    {
        $this->completedAt = $completedAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getClosedAt(): ?\DateTimeInterface
    {
        return $this->closedAt;
    }

    /**
     * @param \DateTimeInterface $closedAt
     */
    public function setClosedAt(?\DateTimeInterface $closedAt)
    {
        $this->closedAt = $closedAt;
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
     * @return string
     */
    public function getSourceIdentifier(): ?string
    {
        return $this->sourceIdentifier;
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
        return $this->sourceUrl;
    }

    /**
     * @param string $sourceUrl
     */
    public function setSourceUrl(?string $sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
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
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
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
    public function getCustomerLocale(): ?string
    {
        return $this->customerLocale;
    }

    /**
     * @param string $customerLocale
     */
    public function setCustomerLocale(?string $customerLocale)
    {
        $this->customerLocale = $customerLocale;
    }

    /**
     * @return LineItem[]
     */
    public function getLineItems(): array
    {
        return $this->lineItems;
    }

    /**
     * @param LineItem[] $lineItems
     */
    public function setLineItems(array $lineItems)
    {
        $this->lineItems = $lineItems;
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
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(?string $source)
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getAbandonedCheckoutUrl(): ?string
    {
        return $this->abandonedCheckoutUrl;
    }

    /**
     * @param string $abandonedCheckoutUrl
     */
    public function setAbandonedCheckoutUrl(?string $abandonedCheckoutUrl)
    {
        $this->abandonedCheckoutUrl = $abandonedCheckoutUrl;
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
     * @return TaxLine[]
     */
    public function getTaxLines(): array
    {
        return $this->taxLines;
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
     * @return string
     */
    public function getPresentmentCurrency(): ?string
    {
        return $this->presentmentCurrency;
    }

    /**
     * @param string $presentmentCurrency
     */
    public function setPresentmentCurrency(?string $presentmentCurrency)
    {
        $this->presentmentCurrency = $presentmentCurrency;
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
    public function getTotalPrice(): ?string
    {
        return $this->totalPrice;
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
    public function getTotalTax(): ?string
    {
        return $this->totalTax;
    }

    /**
     * @param string $totalTax
     */
    public function setTotalTax(?string $totalTax)
    {
        $this->totalTax = $totalTax;
    }

    /**
     * @return string
     */
    public function getSubtotalPrice(): ?string
    {
        return $this->subtotalPrice;
    }

    /**
     * @param string $subtotalPrice
     */
    public function setSubtotalPrice(?string $subtotalPrice)
    {
        $this->subtotalPrice = $subtotalPrice;
    }

    /**
     * @return string
     */
    public function getTotalDuties(): ?string
    {
        return $this->totalDuties;
    }

    /**
     * @param string $totalDuties
     */
    public function setTotalDuties(?string $totalDuties)
    {
        $this->totalDuties = $totalDuties;
    }

    /**
     * @return OrderAddress
     */
    public function getBillingAddress(): OrderAddress
    {
        return $this->billingAddress;
    }

    /**
     * @param OrderAddress $billingAddress
     */
    public function setBillingAddress(OrderAddress $billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return OrderAddress
     */
    public function getShippingAddress(): OrderAddress
    {
        return $this->shippingAddress;
    }

    /**
     * @param OrderAddress $shippingAddress
     */
    public function setShippingAddress(OrderAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }
}
