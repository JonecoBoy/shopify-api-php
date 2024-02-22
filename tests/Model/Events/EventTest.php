<?php

namespace Joneco\Shopify\Tests\Model\Events;

use Joneco\Shopify\Model\Events\Event;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class EventTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Event::class;
    }
}