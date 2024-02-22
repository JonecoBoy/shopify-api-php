<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\ClientDetails;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ClientDetailsTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ClientDetails::class;
    }
}