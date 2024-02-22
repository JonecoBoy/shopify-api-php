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
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class StorefrontAccessTokenManager extends GeneralCurdManager implements StorefrontAccessTokenManagerInterface
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return StorefrontAccessToken::class;
    }

    /**
     * @inheritDoc
     */
    protected function getResourceName()
    {
        return 'storefront_access_token';
    }

    /**
     * @inheritDoc
     */
    public static function getServiceName()
    {
        return 'storefront_access_tokens';
    }
}
