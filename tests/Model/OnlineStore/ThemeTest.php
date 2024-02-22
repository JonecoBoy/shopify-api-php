<?php

namespace Joneco\Shopify\Tests\Model\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Theme;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ThemeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Theme::class;
    }
}