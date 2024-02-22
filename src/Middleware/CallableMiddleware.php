<?php


namespace Joneco\Shopify\Middleware;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Joneco\Shopify\Exception\ClientException;

class CallableMiddleware implements MiddlewareInterface
{
    /**
     * @var callable
     */
    protected $callable;

    public function __construct(callable $callable)
    {
        $this->callable = $callable;
    }

    /**
     * {@inheritDoc}
     */
    public function handle(RequestInterface $request, callable $next): ResponseInterface
    {
        return call_user_func($this->callable, $request, $next);
    }
}