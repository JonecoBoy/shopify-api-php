<?php

namespace Joneco\Shopify\Tests\Model\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Blog;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class BlogTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Blog::class;
    }
}