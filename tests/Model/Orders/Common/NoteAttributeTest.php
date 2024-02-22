<?php

namespace Joneco\Shopify\Tests\Model\Orders\Common;

use Joneco\Shopify\Model\Orders\Common\NoteAttribute;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class NoteAttributeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return NoteAttribute::class;
    }
}