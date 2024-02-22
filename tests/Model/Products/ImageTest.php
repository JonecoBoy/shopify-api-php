<?php

namespace Joneco\Shopify\Tests\Model\Products;

use Joneco\Shopify\Model\Products\Image;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class ImageTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Image::class;
    }
}