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

use Psr\Http\Message\RequestInterface;

class PublicAppCredential implements CredentialInterface
{
    /**
     * @var AccessToken
     */
    protected AccessToken $accessToken;

    public function __construct(AccessToken|string $accessToken)
    {
        $this->accessToken = $accessToken instanceof AccessToken ? $accessToken : new AccessToken($accessToken);
    }

    /**
     * {@inheritdoc}
     */
    public function applyToRequest(RequestInterface $request): RequestInterface
    {
        return $request->withHeader('X-Shopify-Access-Token', (string) $this->getAccessToken());
    }

    /**
     * Gets the access token.
     *
     * @return AccessToken
     */
    public function getAccessToken(): AccessToken
    {
        return $this->accessToken;
    }
}
