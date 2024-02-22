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

interface CredentialInterface
{
    /**
     * Apply the credential to the request.
     *
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function applyToRequest(RequestInterface $request): RequestInterface;
}
