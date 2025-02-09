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

use Joneco\Shopify\Exception\InvalidArgumentException;

final class AccessToken
{
    /**
     * @var string
     */
    protected string $token;

    public function __construct(string $token)
    {
        if (0 === preg_match('/^([a-zA-Z0-9_]{10,100})$/', $token)) {
            throw new InvalidArgumentException('Access token should be between 10 and 100 letters and numbers');
        }
        $this->token = $token;
    }

    /**
     * Transform the token to string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->token;
    }
}
