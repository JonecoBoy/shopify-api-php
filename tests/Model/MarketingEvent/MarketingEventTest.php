<?php

namespace Joneco\Shopify\Tests\Model\MarketingEvent;

use Joneco\Shopify\Model\MarketingEvent\MarketingEvent;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class MarketingEventTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return MarketingEvent::class;
    }
}