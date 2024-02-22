<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\Duty;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class DutyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Duty::class;
    }
}