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

namespace Joneco\Shopify\Service\Discounts;

use Joneco\Shopify\Model\Discounts\PriceRule;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class PriceRuleManager extends GeneralCurdManager implements PriceRuleManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'price_rules';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'price_rule';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return PriceRule::class;
    }

    /**
     * {@inheritdoc}
     */
    public function count(array $query = [])
    {
        throw new \Exception('The method is not supported');
    }
}
