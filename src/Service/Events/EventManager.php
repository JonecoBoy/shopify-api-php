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

namespace Joneco\Shopify\Service\Events;

use Joneco\Shopify\Model\Events\Event;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class EventManager extends GeneralCurdManager implements EventManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Event::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'event';
    }
}
