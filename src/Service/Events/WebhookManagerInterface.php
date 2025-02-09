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

namespace Joneco\Shopify\Service\Events;

use Psr\Http\Message\RequestInterface;
use Joneco\Shopify\Model\Events\Webhook;

interface WebhookManagerInterface
{
    /**
     * Gets all webhooks.
     *
     * @param array $query
     *
     * @return Webhook[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the webhook by its id.
     *
     * @param int $id
     *
     * @return Webhook
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @param array $query
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Updates the webhook.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the webhook.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a webhook.
     *
     * @param array $data
     *
     * @return Webhook
     */
    public function create(array $data);

    /**
     * Checks whether the request is a valid webhook request.
     *
     * @param RequestInterface $request
     *
     * @return bool
     */
    public function checkIncomingWebhookIsValid(RequestInterface $request);
}
