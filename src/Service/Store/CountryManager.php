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

namespace Joneco\Shopify\Service\Store;

use Joneco\Shopify\Model\Store\Country;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class CountryManager extends GeneralCurdManager implements CountryManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'countries';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Country::class;
    }
}
