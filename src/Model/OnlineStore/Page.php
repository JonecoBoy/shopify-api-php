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

class Page
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var int
     */
    protected $shopId;

    /**
     * @var string
     */
    protected $handle;

    /**
     * @var string
     */
    protected $bodyHtml;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var \DateTimeInterface
     */
    protected $publishedAt;

    /**
     * @var string
     */
    protected $templateSuffix;

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
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
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
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     */
    public function setHandle(?string $handle)
    {
        $this->handle = $handle;
    }

    /**
     * @return string
     */
    public function getBodyHtml(): ?string
    {
        return $this->bodyHtml;
    }

    /**
     * @param string $bodyHtml
     */
    public function setBodyHtml(?string $bodyHtml)
    {
        $this->bodyHtml = $bodyHtml;
    }

    /**
     * @return string
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(?string $author)
    {
        $this->author = $author;
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
     * @return \DateTimeInterface
     */
    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->publishedAt;
    }

    /**
     * @param \DateTimeInterface $publishedAt
     */
    public function setPublishedAt(?\DateTimeInterface $publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return string
     */
    public function getTemplateSuffix(): ?string
    {
        return $this->templateSuffix;
    }

    /**
     * @param string $templateSuffix
     */
    public function setTemplateSuffix(?string $templateSuffix)
    {
        $this->templateSuffix = $templateSuffix;
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
