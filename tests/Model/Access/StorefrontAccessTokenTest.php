<?php

namespace Joneco\Shopify\Tests\Model\Access;

use Joneco\Shopify\Model\Access\StorefrontAccessToken;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class StorefrontAccessTokenTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return StorefrontAccessToken::class;
    }
}