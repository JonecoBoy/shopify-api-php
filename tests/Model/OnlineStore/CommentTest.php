<?php

namespace Joneco\Shopify\Tests\Model\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Comment;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CommentTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Comment::class;
    }
}