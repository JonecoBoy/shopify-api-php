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

use Joneco\Shopify\Model\Discounts\DiscountCode;
use Joneco\Shopify\Service\Common\NestCrudManager;

class DiscountCodeManager extends NestCrudManager implements DiscountCodeManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'discount_codes';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'discount_code';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'price_rule';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return DiscountCode::class;
    }

    /**
     * {@inheritdoc}
     */
    public function count($priceRuleId, array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}
