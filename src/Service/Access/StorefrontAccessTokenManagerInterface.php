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

namespace Joneco\Shopify\Service\Access;

use Joneco\Shopify\Model\Access\StorefrontAccessToken;

interface StorefrontAccessTokenManagerInterface
{
    /**
     * Finds access scopes.
     *
     * @param array $query
     *
     * @return StorefrontAccessToken[]
     */
    public function findAll(array $query = []);

    /**
     * Creates a access token.
     *
     * @param array $data
     *
     * @return StorefrontAccessToken
     */
    public function create(array $data);

    /**
     * Removes the access token..
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);
}
