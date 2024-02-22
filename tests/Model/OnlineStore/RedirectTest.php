<?php

namespace Joneco\Shopify\Tests\Model\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Redirect;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class RedirectTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Redirect::class;
    }
}