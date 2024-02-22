<?php

namespace Joneco\Shopify\Tests\Model\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Article;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ArticleTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Article::class;
    }
}