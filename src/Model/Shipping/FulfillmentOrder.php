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

use Joneco\Shopify\Model\Inventory\Location;
use Joneco\Shopify\Model\Shipping\Common\Destination;
use Joneco\Shopify\Model\Shipping\Common\LineItem;
use Joneco\Shopify\Model\Shipping\Common\MerchantRequest;

class FulfillmentOrder
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $shopId;

    /**
     * @var int
     */
    protected $orderId;

    /**
     * @var int
     */
    protected $assignedLocationId;

    /**
     * @var string
     */
    protected $fulfillmentServiceHandle;

    /**
     * @var string
     */
    protected $requestStatus;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var array<string>
     */
    protected $supportedActions;

    /**
     * @var Destination
     */
    protected $destination;

    /**
     * @var LineItem[]
     */
    protected $lineItems;

    /**
     * @var Location
     */
    protected $assignedLocation;

    /**
     * @var MerchantRequest[]
     */
    protected $merchantRequests;

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
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(?int $shopId)
    {
        $this->shopId = $shopId;
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
     * @return int
     */
    public function getAssignedLocationId(): ?int
    {
        return $this->assignedLocationId;
    }

    /**
     * @param int $assignedLocationId
     */
    public function setAssignedLocationId(?int $assignedLocationId)
    {
        $this->assignedLocationId = $assignedLocationId;
    }

    /**
     * @return string
     */
    public function getFulfillmentServiceHandle(): ?string
    {
        return $this->fulfillmentServiceHandle;
    }

    /**
     * @param string $fulfillmentServiceHandle
     */
    public function setFulfillmentServiceHandle(?string $fulfillmentServiceHandle)
    {
        $this->fulfillmentServiceHandle = $fulfillmentServiceHandle;
    }

    /**
     * @return string
     */
    public function getRequestStatus(): ?string
    {
        return $this->requestStatus;
    }

    /**
     * @param string $requestStatus
     */
    public function setRequestStatus(?string $requestStatus)
    {
        $this->requestStatus = $requestStatus;
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
     * @return array
     */
    public function getSupportedActions(): array
    {
        return $this->supportedActions;
    }

    /**
     * @param array $supportedActions
     */
    public function setSupportedActions(array $supportedActions)
    {
        $this->supportedActions = $supportedActions;
    }

    /**
     * @return Destination
     */
    public function getDestination(): Destination
    {
        return $this->destination;
    }

    /**
     * @param Destination $destination
     */
    public function setDestination(Destination $destination)
    {
        $this->destination = $destination;
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
     * @return Location
     */
    public function getAssignedLocation(): Location
    {
        return $this->assignedLocation;
    }

    /**
     * @param Location $assignedLocation
     */
    public function setAssignedLocation(Location $assignedLocation)
    {
        $this->assignedLocation = $assignedLocation;
    }

    /**
     * @return MerchantRequest[]
     */
    public function getMerchantRequests(): array
    {
        return $this->merchantRequests;
    }

    /**
     * @param MerchantRequest[] $merchantRequests
     */
    public function setMerchantRequests(array $merchantRequests)
    {
        $this->merchantRequests = $merchantRequests;
    }
}
