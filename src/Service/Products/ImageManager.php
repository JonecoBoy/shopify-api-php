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

use Joneco\Shopify\Model\Products\Image;
use Joneco\Shopify\Service\Common\NestCrudManager;

class ImageManager extends NestCrudManager implements ImageManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'product_images';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Image::class;
    }
}
