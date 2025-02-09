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

namespace Joneco\Shopify\Service\OnlineStore;

use Joneco\Shopify\Model\OnlineStore\Asset;
use Joneco\Shopify\Service\Common\AbstractManager;

class AssetManager extends AbstractManager implements AssetManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'assets';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'asset';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Asset::class;
    }
    
    /**
     * {@inheritdoc}
     */
    public function findAll($themeId)
    {
        $resource = $this->createPartialResourceUrlForList($themeId);
        $data = $this->client->get($resource);

        return $this->createMany(reset($data));
    }

    /**
     * {@inheritdoc}
     */
    public function find($themeId, $key)
    {
        $resource = $this->createPartialResourceUrlForList($themeId);
        $data = $this->client->get($resource, [
            'asset' => [
                'key' => $key
            ]
        ]);

        return $this->fromArray(reset($data));
    }

    /**
     * {@inheritdoc}
     */
    public function update($themeId, array $data)
    {
        $resource = $this->createPartialResourceUrlForList($themeId);
        $data = $this->client->put($resource, [$this->getResourceName() => $data]);

        return $this->fromArray(reset($data));
    }

    /**
     * {@inheritdoc}
     */
    public function remove($themeId, $key)
    {
        $resource = $this->createPartialResourceUrlForList($themeId);
        $this->client->delete($resource, [
            'asset' => [
                'key' => $key
            ]
        ]);
    }

    /**
     * @param integer $themeId
     *
     * @return string
     */
    protected function createPartialResourceUrlForList($themeId)
    {
        return "themes/{$themeId}/assets";
    }
}
