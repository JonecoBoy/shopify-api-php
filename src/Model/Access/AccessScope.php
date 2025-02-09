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

namespace Joneco\Shopify\Model\Access;

class AccessScope
{
    /**
     * @var string
     */
    protected $handle;

    /**
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     */
    public function setHandle(?string $handle)
    {
        $this->handle = $handle;
    }
}
