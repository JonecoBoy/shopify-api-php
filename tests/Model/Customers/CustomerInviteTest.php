<?php

namespace Joneco\Shopify\Tests\Model\Customers;

use Joneco\Shopify\Model\Customers\CustomerInvite;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CustomerInviteTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CustomerInvite::class;
    }
}