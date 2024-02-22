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

namespace Joneco\Shopify\Service\Products;

use Joneco\Shopify\Model\Products\Product;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class ProductManager extends GeneralCurdManager implements ProductManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Product::class;
    }
}
