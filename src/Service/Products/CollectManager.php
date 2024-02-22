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

use Joneco\Shopify\Model\Products\Collect;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class CollectManager extends GeneralCurdManager implements CollectManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'collects';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'collect';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Collect::class;
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {
        throw new \Exception('The method is not supported');
    }
}
