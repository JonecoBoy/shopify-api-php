<?php

namespace Joneco\Shopify\Tests\Model\Customers;

use Joneco\Shopify\Model\Customers\Customer;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CustomerTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Customer::class;
    }
}