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

namespace Joneco\Shopify\Service\Analytics;

use Joneco\Shopify\Model\Analytics\Report;
use Joneco\Shopify\Service\Common\GeneralCurdManager;

class ReportManager extends GeneralCurdManager implements ReportManagerInterface
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Report::class;
    }

    /**
     * @inheritDoc
     */
    protected function getResourceName()
    {
        return 'report';
    }

    /**
     * @inheritDoc
     */
    public static function getServiceName()
    {
        return 'reports';
    }
}
