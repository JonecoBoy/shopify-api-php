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

namespace Joneco\Shopify\Service\Common;

use Joneco\Shopify\Client;

abstract class AbstractManager implements ManagerInterface
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the model class.
     *
     * @return string
     */
    abstract public function getModelClass();

    /**
     * Gets the resource name.
     *
     * @return string
     */
    abstract protected function getResourceName();

    /**
     * {@inheritdoc}
     */
    public function fromArray(array $data)
    {
        return $this->client->getHydrator()->hydrate($data, $this->getModelClass());
    }

    /**
     * {@inheritdoc}
     */
    public function createMany(array $data)
    {
         return $this->client->getHydrator()->hydrateMany($data, $this->getModelClass());
    }

    /**
     * {@inheritdoc}
     */
    public function toArray($model)
    {
        return $this->client->getHydrator()->extract($model);
    }
}
