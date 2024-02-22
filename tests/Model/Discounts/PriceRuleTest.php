<?php

namespace Joneco\Shopify\Tests\Model\Discounts;

use Joneco\Shopify\Model\Discounts\PriceRule;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class PriceRuleTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return PriceRule::class;
    }
}