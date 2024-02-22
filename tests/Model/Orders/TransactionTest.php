<?php

namespace Joneco\Shopify\Tests\Model\Orders;

use Joneco\Shopify\Model\Orders\Transaction;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class TransactionTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Transaction::class;
    }
}