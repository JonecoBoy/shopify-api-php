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

use Joneco\Shopify\Inflector;

abstract class GeneralCurdManager extends AbstractManager
{
    /**
     * Finds the resources by given query condition.
     *
     * @param array $query
     *
     * @return object[]
     */
    public function findAll(array $query = [])
    {
        $data = $this->client->get(Inflector::pluralize($this->getResourceName()), $query);

        return $this->createMany(reset($data));
    }

    /**
     * Create a paging query.
     *
     * @param array $query
     *
     * @return CursorBasedPagination
     * @codeCoverageIgnore
     */
    public function paginate(array $query = [])
    {
        $resource = Inflector::pluralize($this->getResourceName());

        return new CursorBasedPagination($this->client, $this, $resource, $query);
    }

    /**
     * Finds the resource by given id.
     *
     * @param int $id
     *
     * @return object
     */
    public function find($id)
    {
        $data = $this->client->get(Inflector::pluralize($this->getResourceName()).'/'.$id);

        return $this->fromArray(reset($data));
    }

    /**
     * Delete a resource.
     *
     * @param int $id
     */
    public function remove($id)
    {
        $this->client->delete(Inflector::pluralize($this->getResourceName()).'/'.$id);
    }

    /**
     * Updates a resource.
     *
     * @param int   $id
     * @param array $data
     *
     * @return object
     */
    public function update($id, array $data)
    {
        $data = $this->client->put(Inflector::pluralize($this->getResourceName()).'/'.$id, [$this->getResourceName() => $data]);

        return $this->fromArray(reset($data));
    }

    /**
     * Creates a resource.
     *
     * @param array $data
     *
     * @return object
     */
    public function create(array $data)
    {
        $data = $this->client->post(Inflector::pluralize($this->getResourceName()), [$this->getResourceName() => $data]);

        return $this->fromArray(reset($data));
    }

    /**
     * Gets the number of resource with given query.
     *
     * @param array $query
     *
     * @return int
     */
    public function count(array $query = [])
    {
        $partial = Inflector::pluralize($this->getResourceName()).'/count';

        return $this->client->get($partial, $query)['count'];
    }
}
