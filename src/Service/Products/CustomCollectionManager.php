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

use Joneco\Shopify\Model\Products\CustomCollection;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class CustomCollectionManager extends GeneralCurdManager implements CustomCollectionManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'custom_collections';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'custom_collection';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return CustomCollection::class;
    }
}
