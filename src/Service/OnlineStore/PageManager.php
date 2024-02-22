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

use Joneco\Shopify\Model\OnlineStore\Page;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class PageManager extends GeneralCurdManager implements PageManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Page::class;
    }
}
