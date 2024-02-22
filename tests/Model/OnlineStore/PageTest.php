<?php

namespace Joneco\Shopify\Tests\Model\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Page;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class PageTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Page::class;
    }
}