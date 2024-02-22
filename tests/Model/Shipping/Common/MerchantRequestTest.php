<?php

namespace Joneco\Shopify\Tests\Model\Shipping\Common;

use Joneco\Shopify\Model\Shipping\Common\MerchantRequest;
use Joneco\Shopify\Tests\Model\ModelTestCase;

class MerchantRequestTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return MerchantRequest::class;
    }
}