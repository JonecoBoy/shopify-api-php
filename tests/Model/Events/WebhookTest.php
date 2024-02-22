<?php

namespace Joneco\Shopify\Tests\Model\Events;

use Joneco\Shopify\Model\Events\Webhook;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class WebhookTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Webhook::class;
    }
}