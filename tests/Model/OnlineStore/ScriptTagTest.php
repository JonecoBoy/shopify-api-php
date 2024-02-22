<?php

namespace Joneco\Shopify\Tests\Model\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\ScriptTag;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ScriptTagTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ScriptTag::class;
    }
}