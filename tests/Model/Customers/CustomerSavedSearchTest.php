<?php

namespace Joneco\Shopify\Tests\Model\Customers;

use Joneco\Shopify\Model\Customers\CustomerSavedSearch;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CustomerSavedSearchTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CustomerSavedSearch::class;
    }
}