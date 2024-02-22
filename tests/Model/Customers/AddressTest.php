<?php

namespace Joneco\Shopify\Tests\Model\Customers;

use Joneco\Shopify\Model\Customers\Address;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class AddressTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Address::class;
    }
}