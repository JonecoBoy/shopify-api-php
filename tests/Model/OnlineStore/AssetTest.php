<?php

namespace Joneco\Shopify\Tests\Model\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Asset;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class AssetTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Asset::class;
    }
}