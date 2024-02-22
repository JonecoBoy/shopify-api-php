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

use Joneco\Shopify\Model\OnlineStore\ScriptTag;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class ScriptTagManager extends GeneralCurdManager implements ScriptTagManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'script_tags';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return ScriptTag::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'script_tag';
    }
}
