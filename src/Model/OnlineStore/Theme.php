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

class Theme
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
    protected $role;

    /**
     * @var int
     */
    protected $themeStoreId;

    /**
     * @var bool
     */
    protected $previewable;

    /**
     * @var bool
     */
    protected $processing;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

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
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(?string $role)
    {
        $this->role = $role;
    }

    /**
     * @return int
     */
    public function getThemeStoreId(): ?int
    {
        return $this->themeStoreId;
    }

    /**
     * @param int $themeStoreId
     */
    public function setThemeStoreId(?int $themeStoreId)
    {
        $this->themeStoreId = $themeStoreId;
    }

    /**
     * @return bool
     */
    public function isPreviewable(): ?bool
    {
        return $this->previewable;
    }

    /**
     * @param bool $previewable
     */
    public function setPreviewable(?bool $previewable)
    {
        $this->previewable = $previewable;
    }

    /**
     * @return bool
     */
    public function isProcessing(): ?bool
    {
        return $this->processing;
    }

    /**
     * @param bool $processing
     */
    public function setProcessing(?bool $processing)
    {
        $this->processing = $processing;
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
}
