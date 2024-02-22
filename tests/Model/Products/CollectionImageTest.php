<?php

namespace Joneco\Shopify\Tests\Model\Products;

use Joneco\Shopify\Model\Products\CollectionImage;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class CollectionImageTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CollectionImage::class;
    }
}