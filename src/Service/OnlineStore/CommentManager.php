<?php

declare(strict_types=1);

/*
 * This file is part of the Joneco/shopify-api-php
 *
 * (c) Joneco <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Joneco\Shopify\Service\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Comment;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class CommentManager extends GeneralCurdManager implements CommentManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Comment::class;
    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
        throw new \Exception('The action is not supported');
    }
}
