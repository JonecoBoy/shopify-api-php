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

namespace Joneco\Shopify;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Utils;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client as HttpClient;
use Joneco\Di\Container;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Joneco\Shopify\Exception\ClientException;
use Joneco\Shopify\Exception\RuntimeException;
use Joneco\Shopify\Middleware\DelayMiddleware;
use Joneco\Shopify\Middleware\MiddlewareChain;
use Joneco\Shopify\Service\Common\ManagerInterface;
use Joneco\Shopify\Exception\InvalidArgumentException;
use Joneco\Shopify\Hydrator\Hydrator;

/**
 * @method Service\Access\AccessScopeManagerInterface getAccessScopeManager
 * @method Service\Access\StorefrontAccessTokenManagerInterface getStorefrontAccessTokenManager
 * @method Service\Analytics\ReportManagerInterface getReportManager
 * @method Service\Billing\ApplicationChargeManagerInterface getApplicationChargeManager
 * @method Service\Billing\ApplicationCreditManagerInterface getApplicationCreditManager
 * @method Service\Billing\RecurringApplicationChargeManagerInterface getRecurringApplicationChargeManager
 * @method Service\Billing\UsageChargeManagerInterface getUsageChargeManager
 * @method Service\Customers\AddressManagerInterface getCustomerAddressManager
 * @method Service\Customers\CustomerManagerInterface getCustomerManager
 * @method Service\Customers\CustomerSavedSearchManagerInterface getCustomerSavedSearchManager
 * @method Service\Discounts\DiscountCodeManagerInterface getDiscountCodeManager
 * @method Service\Discounts\PriceRuleManagerInterface getPriceRuleManager
 * @method Service\Events\EventManagerInterface getEventManager
 * @method Service\Events\WebhookManagerInterface getWebhookManager
 * @method Service\Inventory\InventoryItemManagerInterface getInventoryItemManager
 * @method Service\Inventory\InventoryLevelManagerInterface getInventoryLevelManager
 * @method Service\Inventory\LocationManagerInterface getLocationManager
 * @method Service\MarketingEvent\MarketingEventManagerInterface getMarketingEventManager
 * @method Service\OnlineStore\ArticleManagerInterface getArticleManager
 * @method Service\OnlineStore\AssetManagerInterface getAssetManager
 * @method Service\OnlineStore\BlogManagerInterface getBlogManager
 * @method Service\OnlineStore\CommentManagerInterface getCommentManager
 * @method Service\OnlineStore\PageManagerInterface getPageManager
 * @method Service\OnlineStore\RedirectManagerInterface getRedirectManager
 * @method Service\OnlineStore\ScriptTagManagerInterface getScriptTagManager
 * @method Service\OnlineStore\ThemeManagerInterface getThemeManager
 * @method Service\Orders\DraftOrderManagerInterface getDraftOrderManager
 * @method Service\Orders\OrderManagerInterface getOrderManager
 * @method Service\Orders\RefundManagerInterface getRefundManager
 * @method Service\Orders\RiskManagerInterface getOrderRiskManager
 * @method Service\Orders\TransactionManagerInterface getTransactionManager
 * @method Service\Products\CollectManagerInterface getCollectManager
 * @method Service\Products\CustomCollectionManagerInterface getCustomCollectionManager
 * @method Service\Products\ImageManagerInterface getProductImageManager
 * @method Service\Products\ProductManagerInterface getProductManager
 * @method Service\Products\SmartCollectionManagerInterface getSmartCollectionManager
 * @method Service\Products\VariantManagerInterface getProductVariantManager
 * @method Service\Shipping\AssignedFulfillmentOrderManagerInterface getAssignedFulfillmentOrderManager
 * @method Service\Shipping\CarrierServiceManagerInterface getCarrierServiceManager
 * @method Service\Shipping\FulfillmentManagerInterface getFulfillmentManager
 * @method Service\Shipping\FulfillmentOrderManagerInterface getFulfillmentOrderManager
 * @method Service\Shipping\FulfillmentServiceManagerInterface getFulfillmentServiceManager
 * @method Service\Store\CountryManagerInterface getCountryManager
 * @method Service\Store\ShippingZoneManagerInterface getCurrencyManager
 * @method Service\Store\PolicyManagerInterface getPolicyManager
 * @method Service\Store\ProvinceManagerInterface getProvinceManager
 * @method Service\Store\ShippingZoneManagerInterface getShippingZoneManager
 * @method Service\Store\ShopManagerInterface getShopManager
 */
class Client
{
    const NAME = 'JonecoShopifyClient';
    const VERSION = '3.0.0';

    /**
     * @var Container
     */
    protected Container $container;

    /**
     * @var CredentialInterface
     */
    protected CredentialInterface $credential;

    /**
     * The shop.
     *
     * @var string
     */
    protected string $shop;

    /**
     * @var string
     */
    protected string $apiVersion = '2023-10';

    /**
     * @var ResponseInterface
     */
    protected ResponseInterface $lastResponse;

    /**
     * @var MiddlewareChain
     */
    protected MiddlewareChain $middlewares;

    /**
     * Array of services classes.
     *
     * @var array
     */
    public array $serviceClass =[
        // Access
        Service\Access\AccessScopeManager::class,
        Service\Access\StorefrontAccessTokenManager::class,
        // Analytics
        Service\Analytics\ReportManager::class,
        // Billing
        Service\Billing\ApplicationChargeManager::class,
        Service\Billing\ApplicationCreditManager::class,
        Service\Billing\RecurringApplicationChargeManager::class,
        Service\Billing\UsageChargeManager::class,
        // Customers
        Service\Customers\AddressManager::class,
        Service\Customers\CustomerManager::class,
        Service\Customers\CustomerSavedSearchManager::class,
        // Discounts
        Service\Discounts\DiscountCodeManager::class,
        Service\Discounts\PriceRuleManager::class,
        // Events
        Service\Events\EventManager::class,
        Service\Events\WebhookManager::class,
        // Inventory
        Service\Inventory\InventoryItemManager::class,
        Service\Inventory\InventoryLevelManager::class,
        Service\Inventory\LocationManager::class,
        // MarketingEvent
        Service\MarketingEvent\MarketingEventManager::class,
        // OnlineStore
        Service\OnlineStore\ArticleManager::class,
        Service\OnlineStore\AssetManager::class,
        Service\OnlineStore\BlogManager::class,
        Service\OnlineStore\CommentManager::class,
        Service\OnlineStore\PageManager::class,
        Service\OnlineStore\RedirectManager::class,
        Service\OnlineStore\RedirectManager::class,
        Service\OnlineStore\ScriptTagManager::class,
        Service\OnlineStore\ThemeManager::class,
        // Orders
        Service\Orders\DraftOrderManager::class,
        Service\Orders\OrderManager::class,
        Service\Orders\RefundManager::class,
        Service\Orders\RiskManager::class,
        Service\Orders\TransactionManager::class,
        // Products
        Service\Products\CollectManager::class,
        Service\Products\CustomCollectionManager::class,
        Service\Products\ImageManager::class,
        Service\Products\ProductManager::class,
        Service\Products\SmartCollectionManager::class,
        Service\Products\VariantManager::class,
        // Shipping
        Service\Shipping\AssignedFulfillmentOrderManager::class,
        Service\Shipping\CarrierServiceManager::class,
        Service\Shipping\FulfillmentManager::class,
        Service\Shipping\FulfillmentOrderManager::class,
        Service\Shipping\FulfillmentServiceManager::class,
        // Store
        Service\Store\CountryManager::class,
        Service\Store\CurrencyManager::class,
        Service\Store\PolicyManager::class,
        Service\Store\ProvinceManager::class,
        Service\Store\ShippingZoneManager::class,
        Service\Store\ShopManager::class,
    ];

    /**
     * @var array
     */
    protected array $metaDirs = [
        'Joneco\\Shopify\\Model' => __DIR__.'/../config/serializer'
    ];

    /**
     * @var string
     */
    protected string $metaCacheDir;

    /**
     * @var Hydrator|null
     */
    protected ?Hydrator $hydrator = null;

    /**
     * @var HttpClient
     */
    protected HttpClient $httpClient;

    public function __construct($shop, CredentialInterface $credential, array $options = [])
    {
        $this->container = new Container();
        $this->container->register($this);
        $this->setShop($shop);
        $this->credential = $credential;
        $this->applyOptions($options);
        $this->initializeBaseServices();
    }

    public function __call($name, $arguments)
    {
        if (str_ends_with($name, 'Manager')) {
            $serviceId = substr($name, 3, -7);
            $serviceId = Inflector::tableize(Inflector::pluralize($serviceId));
            return $this->container->get($serviceId);
        }
        throw new \InvalidArgumentException(sprintf('The method "%s" is not exists', $name));
    }

    /**
     * Gets the credential.
     *
     * @return CredentialInterface
     */
    public function getCredential(): CredentialInterface
    {
        return $this->credential;
    }

    /**
     * sets the shop name for the client.
     *
     * @param string $shop
     */
    public function setShop(string $shop): void
    {
        if (!preg_match('/^[a-zA-Z0-9\-]{3,100}\.myshopify\.(?:com|io)$/', $shop)) {
            throw new InvalidArgumentException(
                'Shop name should be 3-100 letters, numbers, or hyphens e.g. your-store.myshopify.com'
            );
        }
        $this->shop = $shop;
    }

    /**
     * Gets the shop.
     *
     * @return string
     */
    public function getShop(): string
    {
        return $this->shop;
    }

    /**
     * Perform a GET request.
     *
     * @param string $resource
     * @param array $query
     *
     * @return array
     */
    public function get(string $resource, array $query = []): array
    {
        return $this->createRequest('GET', $this->buildUrl($resource), [
            'query' => $query,
        ]);
    }

    /**
     * Perform a POST request.
     *
     * @param string $resource
     * @param array $data
     * @param array $query
     *
     * @return array
     */
    public function post(string $resource, array $data, array $query = []): array
    {
        return $this->createRequest('POST', $this->buildUrl($resource), [
            'query' => $query,
            'json' => $data,
        ]);
    }

    /**
     * Perform a PUT request.
     *
     * @param string $resource
     * @param array $data
     * @param array $query
     *
     * @return array
     */
    public function put(string $resource, array $data, array $query = []): array
    {
        return $this->createRequest('PUT', $this->buildUrl($resource), [
            'query' => $query,
            'json' => $data,
        ]);
    }

    /**
     * Perform a DELETE request.
     *
     * @param string $resource
     * @param array $query
     */
    public function delete(string $resource, array $query = []): void
    {
        $this->createRequest('DELETE', $this->buildUrl($resource), [
            'query' => $query
        ]);
    }

    /**
     * Create a HTTP request
     *
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return array
     */
    public function createRequest(string $method, string $uri, array $options = []): array
    {
        $request = new Request($method, $uri, [
            'Content-Type' => 'application/json',
        ]);
        $response = $this->sendRequest($request, $options);
        $body = $response->getBody();

        return $body->getSize()
            ? Utils::jsonDecode((string)$body, true)
            : [];
    }

    /**
     * Send a request.
     *
     * @param RequestInterface $request
     * @param array $options
     *
     * @return ResponseInterface
     * @codeCoverageIgnore
     */
    protected function sendRequest(RequestInterface $request, array $options = []): ResponseInterface
    {
        $request = $this->credential->applyToRequest($request);
        $request = $request->withHeader('User-Agent', static::NAME . '/' . static::VERSION);
        $response = $this->middlewares->handle($request, function(RequestInterface $request) use ($options){
            try {
                return $this->httpClient->send($request, $options);
            } catch (RequestException $exception) {
                $response = $exception->getResponse();
                if (!$response) {
                    throw new ClientException($request, null, $exception->getMessage(), $exception->getCode());
                }
                return $response;
            }
        });
        $this->raiseException($request, $response);
        $this->lastResponse = $response;
        return $response;
    }

    protected function raiseException(RequestInterface $request, ResponseInterface $response): void
    {
        if ($response->getStatusCode() < 300) {
            return;
        }
        switch ($response->getStatusCode()) {
            case 400:
                throw new Exception\BadRequestException($request, $response);
            case 401:
                throw new Exception\UnauthorizedException($request, $response);
            case 402:
                throw new Exception\PaymentRequiredException($request, $response);
            case 403:
                throw new Exception\ForbiddenException($request, $response);
            case 404:
                throw new Exception\NotFoundException($request, $response);
            case 406:
                throw new Exception\NotAcceptableException($request, $response);
            case 422:
                throw new Exception\UnprocessableEntityException($request, $response);
            case 429:
                throw new Exception\TooManyRequestsException($request, $response);
        }
    }

    /**
     * Gets the latest http response.
     *
     * @return ResponseInterface
     */
    public function getLastResponse(): ResponseInterface
    {
        return $this->lastResponse;
    }

    /**
     * Builds an url by given resource name.
     *
     * @param string $resource
     * @param bool $versioning
     * @return string
     */
    public function buildUrl(string $resource, bool $versioning = true): string
    {
        return $versioning ? sprintf('https://%s/admin/api/%s/%s.json', $this->shop, $this->apiVersion, $resource)
            : sprintf('https://%s/admin/%s.json', $this->shop, $resource);
    }

    /**
     * Applies the array of request options to the client.
     *
     * @param array $options
     */
    protected function applyOptions(array $options)
    {
        if (!isset($options['http_client'])) {
            $options['http_client'] = new HttpClient([
                'verify' => false
            ]);
        }
        $this->httpClient = $options['http_client'];
        if (!isset($options['meta_cache_dir'])) {
            throw new InvalidArgumentException('You must provide option "meta_cache_dir"');
        }
        $this->metaCacheDir = $options['meta_cache_dir'];
        if (isset($options['api_version'])) {
            if (!preg_match('/^[0-9]{4}-[0-9]{2}$|^unstable$/', $options['api_version'])) {
                throw new InvalidArgumentException('Version string must be of YYYY-MM or unstable');
            }
            $this->apiVersion = $options['api_version'];
        }
        if (!isset($options['middlewares'])) {
            $options['middlewares'] = new MiddlewareChain([
                new DelayMiddleware()
            ]);
        }
        $this->middlewares = $options['middlewares'];
    }

    /**
     * Gets the middleware chain.
     *
     * @return MiddlewareChain
     */
    public function getMiddlewares(): MiddlewareChain
    {
        return $this->middlewares;
    }

    /**
     * Gets the hydrator instance.
     *
     * @return Hydrator
     */
    public function getHydrator(): Hydrator
    {
        if ($this->hydrator) {
            return $this->hydrator;
        }
        return $this->hydrator = new Hydrator($this->metaCacheDir, $this->metaDirs);
    }

    /**
     * Add a custom meta dir.
     *
     * @param string $namespace
     * @param string $path
     * @throws RuntimeException
     */
    public function addMetaDir(string $namespace, string $path): void
    {
        if ($this->hydrator) {
            throw new RuntimeException('The hydrator has been built, you should add meta dir before getting manager.');
        }
        $this->metaDirs[$namespace] = $path;
    }

    /**
     * Add a custom service class.
     *
     * @param string $serviceClass
     * @throws InvalidArgumentException
     */
    public function addServiceClass(string $serviceClass): void
    {
        if (!is_subclass_of($serviceClass, ManagerInterface::class)) {
            throw new InvalidArgumentException(sprintf('The service class "%s" should implement "ManagerInterface"', $serviceClass));
        }
        $this->serviceClass[] = $serviceClass;
        $this->container->register($serviceClass::getServiceName(), $serviceClass);
    }

    /**
     * Initialize base services.
     */
    protected function initializeBaseServices(): void
    {
        foreach ($this->serviceClass as $serviceClass) {
            $this->container->register($serviceClass::getServiceName(), $serviceClass);
        }
    }
}
