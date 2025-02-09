<?php

namespace Joneco\Shopify\Tests\Service\Store;

use Joneco\Shopify\Tests\Service\Common\AbstractManagerTestCase;

class ShopManagerTest extends AbstractManagerTestCase
{
    public function testFind()
    {
        $fixture = $this->getFixturesDir().'/view.json';
        $service = $this->getService($fixture);
        $entity = $service->get();
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }
}