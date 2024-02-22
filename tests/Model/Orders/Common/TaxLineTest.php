<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\TaxLine;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class TaxLineTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return TaxLine::class;
    }
}