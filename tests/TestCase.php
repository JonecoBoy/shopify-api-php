<?php

namespace Joneco\Shopify\Tests;

use GuzzleHttp\Utils;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Joneco\Shopify\Client;
use Joneco\Shopify\PublicAppCredential;
use Symfony\Component\Filesystem\Filesystem;

class TestCase extends BaseTestCase
{
    const FIXTURES_DIR = __DIR__.'/Resources';
    const METADATA_DIR = __DIR__.'/../config/serializer';

    const ACCESS_TOKEN = 'asdasdadasdadasda';

    const SHOP_NAME = 'asasa.myshopify.com';

    /**
     * @var Filesystem
     */
    protected $filesystem;

    public function setUp(): void
    {
        $this->filesystem = new Filesystem();
        $this->filesystem->remove(__DIR__ . '/tmp');
    }

    public function tearDown(): void
    {
        $this->filesystem->remove(__DIR__ . '/tmp');
    }

    /**
     * @param string $fixture
     * @param int    $code
     * @param array  $headers
     *
     * @return Client
     */
    protected function getClientMock($fixture, $code = 200, $headers = [])
    {
        $fixture = static::FIXTURES_DIR.'/'.$fixture;
        $mock = $this->getMockBuilder(Client::class)
            ->setConstructorArgs([
                static::SHOP_NAME,
                new PublicAppCredential(static::ACCESS_TOKEN),
                ['meta_cache_dir' => __DIR__ . '/tmp']
            ])
            ->onlyMethods(['sendRequest'])
            ->getMock();

        $mock->method('sendRequest')
            ->willReturn(new Response($code, $headers, new Stream(fopen($fixture, 'r'))));

        return $mock;
    }

    protected function readFixture($fixture)
    {
        $fixture = static::FIXTURES_DIR.'/'.$fixture;
        return Utils::jsonDecode(file_get_contents($fixture), true);
    }
}