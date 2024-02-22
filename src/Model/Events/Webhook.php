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

namespace Joneco\Shopify\Model\Events;

class Webhook
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $topic;

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
    protected $format;

    /**
     * @var array<string>
     */
    protected $fields;

    /**
     * @var array<string>
     */
    protected $metafieldNamespaces;

    /**
     * @var string
     */
    protected $apiVersion;

    /**
     * @var array<string>
     */
    protected $privateMetafieldNamespaces;

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
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(?string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getTopic(): ?string
    {
        return $this->topic;
    }

    /**
     * @param string $topic
     */
    public function setTopic(?string $topic)
    {
        $this->topic = $topic;
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
     * @return array
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return array
     */
    public function getMetafieldNamespaces(): array
    {
        return $this->metafieldNamespaces;
    }

    /**
     * @param array $metafieldNamespaces
     */
    public function setMetafieldNamespaces(array $metafieldNamespaces)
    {
        $this->metafieldNamespaces = $metafieldNamespaces;
    }

    /**
     * @return string
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * @param string $apiVersion
     */
    public function setApiVersion(?string $apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    /**
     * @return array
     */
    public function getPrivateMetafieldNamespaces(): array
    {
        return $this->privateMetafieldNamespaces;
    }

    /**
     * @param array $privateMetafieldNamespaces
     */
    public function setPrivateMetafieldNamespaces(array $privateMetafieldNamespaces)
    {
        $this->privateMetafieldNamespaces = $privateMetafieldNamespaces;
    }
}
