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

namespace Joneco\Shopify\Service\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Article;

interface ArticleManagerInterface
{
    /**
     * Finds articles.
     *
     * @param int   $blogId
     * @param array $query
     *
     * @return Article[]
     */
    public function findAll($blogId, array $query = []);

    /**
     * Finds an article.
     *
     * @param int $blogId
     * @param int $id
     *
     * @return Article
     */
    public function find($blogId, $id);

    /**
     * Gets the count.
     *
     * @param int   $blogId
     * @param array $query
     *
     * @return int
     */
    public function count($blogId, array $query = []);

    /**
     * Updates the article.
     *
     * @param int   $blogId
     * @param int   $id
     * @param array $data
     *
     * @return Article
     */
    public function update($blogId, $id, array $data);

    /**
     * Removes the article by given blog id and.
     *
     * @param int $blogId
     * @param int $id
     */
    public function remove($blogId, $id);

    /**
     * Creates a article.
     *
     * @param int   $blogId
     * @param array $data
     *
     * @return Article
     */
    public function create($blogId, array $data);
}
