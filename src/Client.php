<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify;

use GuzzleHttp\Utils;
use GuzzleHttp\Psr7\Request;
use Slince\Di\Container;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slince\Shopify\Exception\RuntimeException;
use Slince\Shopify\Middleware\DelayMiddleware;
use Slince\Shopify\Middleware\MiddlewareChain;
use Slince\Shopify\Middleware\RequestMiddleware;
use Slince\Shopify\Service\Common\ManagerInterface;
use Slince\Shopify\Exception\InvalidArgumentException;
use Slince\Shopify\Hydrator\Hydrator;

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
    const NAME = 'SlinceShopifyClient';
    const VERSION = '3.0.0';

    /**
     * @var Container
     */
    protected $container;

    /**
     * @var CredentialInterface
     */
    protected $credential;

    /**
     * The shop.
     *
     * @var string
     */
    protected $shop;

    /**
     * @var string
     */
    protected $apiVersion = '2020-10';

    /**
     * @var ResponseInterface
     */
    protected $lastResponse;

    /**
     * @var MiddlewareChain
     */
    protected $middlewares;

    /**
     * Array of services classes.
     *
     * @var array
     */
    public $serviceClass =[
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

    protected $metaDirs = [
        'Slince\Shopify' => __DIR__.'/../config/serializer'
    ];

    /**
     * Whether delay the next request.
     *
     * @var bool
     */
    protected static $delayNextRequest = false;

    /**
     * @var string
     */
    protected $metaCacheDir;

    /**
     * @var Hydrator
     */
    protected $hydrator;

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
        if ('Manager' === substr($name, -7)) {
            $serviceName = substr($name, 3, -7);

            return $this->container->get(Inflector::tableize(Inflector::pluralize($serviceName)));
        }
        throw new \InvalidArgumentException(sprintf('The method "%s" is not exists', $name));
    }

    /**
     * Gets the credential.
     *
     * @return CredentialInterface
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * sets the shop name for the client.
     *
     * @param string $shop
     */
    public function setShop($shop)
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
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Perform a GET request.
     *
     * @param string $resource
     * @param array  $query
     *
     * @return array
     */
    public function get($resource, $query = [])
    {
        return $this->doRequest('GET', $resource, [
            'query' => $query,
        ]);
    }

    /**
     * Perform a POST request.
     *
     * @param string $resource
     * @param array  $data
     * @param array  $query
     *
     * @return array
     */
    public function post($resource, $data, $query = [])
    {
        return $this->doRequest('POST', $resource, [
            'query' => $query,
            'json' => $data,
        ]);
    }

    /**
     * Perform a PUT request.
     *
     * @param string $resource
     * @param array  $data
     * @param array  $query
     *
     * @return array
     */
    public function put($resource, $data, $query = [])
    {
        return $this->doRequest('PUT', $resource, [
            'query' => $query,
            'json' => $data,
        ]);
    }

    /**
     * Perform a DELETE request.
     *
     * @param string $resource
     * @param array  $query
     */
    public function delete($resource, $query = [])
    {
        $this->doRequest('DELETE', $resource, [
            'query' => $query
        ]);
    }

    /**
     * Send an HTTP request
     *
     * @param string $method
     * @param string $resource
     * @param array $options
     * @return array
     */
    protected function doRequest($method, $resource, $options = [])
    {
        $request = new Request($method, $this->buildUrl($resource), [
            'Content-Type' => 'application/json',
        ]);
        $response = $this->sendRequest($request, $options);
        $body = $response->getBody();

        return $body->getSize()
            ? Utils::jsonDecode($body, true)
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
    public function sendRequest(RequestInterface $request, array $options = [])
    {
        $request = $this->credential->applyToRequest($request);
        $request = $request->withHeader('User-Agent', static::NAME . '/' . static::VERSION);
        $response = $this->middlewares->execute($request);
        $this->lastResponse = $response;
        return $response;
    }

    /**
     * Gets the latest http response.
     *
     * @return ResponseInterface
     */
    public function getLastResponse()
    {
        return $this->lastResponse;
    }

    /**
     * Builds an url by given resource name.
     *
     * @param string $resource
     *
     * @return string
     */
    protected function buildUrl($resource)
    {
        return sprintf('https://%s/admin/api/%s/%s.json', $this->shop, $this->apiVersion, $resource);
    }

    /**
     * Applies the array of request options to the client.
     *
     * @param array $options
     */
    protected function applyOptions(array $options)
    {
        if (!isset($options['metaCacheDir'])) {
            throw new InvalidArgumentException('You must provide option "metaCacheDir"');
        }
        $this->metaCacheDir = $options['metaCacheDir'];
        if (isset($options['apiVersion'])) {
            if (!preg_match('/^[0-9]{4}-[0-9]{2}$|^unstable$/', $options['apiVersion'])) {
                throw new InvalidArgumentException('Version string must be of YYYY-MM or unstable');
            }
            $this->apiVersion = $options['apiVersion'];
        }
        if (!isset($options['middlewares'])) {
            $options['middlewares'] = new MiddlewareChain([
                new DelayMiddleware(),
                new RequestMiddleware()
            ]);
        }
        $this->middlewares = $options['middlewares'];
    }

    /**
     * Gets the hydrator instance.
     *
     * @return Hydrator
     */
    public function getHydrator()
    {
        if ($this->hydrator) {
            return $this->hydrator;
        }
        return $this->hydrator = new Hydrator($this->metaDirs, $this->metaCacheDir);
    }

    /**
     * Add a custom meta dir.
     *
     * @param string $namespace
     * @param string $path
     * @throws RuntimeException
     */
    public function addMetaDir($namespace, $path)
    {
        if ($this->hydrator) {
            throw new RuntimeException(sprintf('The hydrator has been built, you should add meta dir before getting manager.'));
        }
        $this->metaDirs[$namespace] = $path;
    }

    /**
     * Add a custom service class.
     *
     * @param string $serviceClass
     * @throws InvalidArgumentException
     */
    public function addServiceClass($serviceClass)
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
    protected function initializeBaseServices()
    {
        foreach ($this->serviceClass as $serviceClass) {
            $this->container->register($serviceClass::getServiceName(), $serviceClass);
        }
    }
}
