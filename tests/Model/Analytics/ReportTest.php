<?php

namespace Joneco\Shopify\Tests\Model\Analytics;

use Joneco\Shopify\Model\Analytics\Report;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ReportTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Report::class;
    }
}