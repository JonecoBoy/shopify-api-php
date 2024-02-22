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

use Joneco\Shopify\Model\OnlineStore\Blog;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class BlogManager extends GeneralCurdManager implements BlogManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'blogs';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Blog::class;
    }
}
