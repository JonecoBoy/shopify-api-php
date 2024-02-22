<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\LineItemDuty;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class LineItemDutyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return LineItemDuty::class;
    }
}