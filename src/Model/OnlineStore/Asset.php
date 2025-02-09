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
namespace Joneco\Shopify\Model\OnlineStore;

class Asset
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $publicUrl;

    /**
     * @var string
     */
    protected $value;

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
    protected $contentType;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var string
     */
    protected $checkSum;

    /**
     * @var int
     */
    protected $themeId;

    /**
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey(?string $key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getPublicUrl(): ?string
    {
        return $this->publicUrl;
    }

    /**
     * @param string $publicUrl
     */
    public function setPublicUrl(?string $publicUrl)
    {
        $this->publicUrl = $publicUrl;
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
    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     */
    public function setContentType(?string $contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(?int $size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getCheckSum(): ?string
    {
        return $this->checkSum;
    }

    /**
     * @param string $checkSum
     */
    public function setCheckSum(?string $checkSum)
    {
        $this->checkSum = $checkSum;
    }

    /**
     * @return int
     */
    public function getThemeId(): ?int
    {
        return $this->themeId;
    }

    /**
     * @param int $themeId
     */
    public function setThemeId(?int $themeId)
    {
        $this->themeId = $themeId;
    }
}
