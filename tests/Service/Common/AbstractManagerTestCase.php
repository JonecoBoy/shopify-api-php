<?php

namespace Joneco\Shopify\Tests\Service\Common;

use Joneco\Shopify\Tests\TestCase;

class AbstractManagerTestCase extends TestCase
{
    /**
     * @param string $fixture
     *
     * @return object
     */
    public function getService($fixture)
    {
        $class = $this->getServiceClass();
        return new $class($this->getClientMock($fixture));
    }

    protected function getServiceClass()
    {
        return str_ireplace(['\Tests', 'Test'], ['', ''], get_called_class());
    }

    protected function getFixturesDir()
    {
        $fixture = str_ireplace(['Joneco\Shopify\Tests\Service', 'ManagerTest'], ['', ''], get_called_class());
        return str_replace('\\', '/', $fixture);
    }
}