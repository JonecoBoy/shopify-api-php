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

namespace Joneco\Shopify\Model\Products\Common;

class Rule
{
    /**
     * @var string
     */
    protected $column;

    /**
     * @var string
     */
    protected $relation;

    /**
     * @var string
     */
    protected $condition;

    /**
     * @return string
     */
    public function getColumn(): ?string
    {
        return $this->column;
    }

    /**
     * @param string $column
     */
    public function setColumn(?string $column)
    {
        $this->column = $column;
    }

    /**
     * @return string
     */
    public function getRelation(): ?string
    {
        return $this->relation;
    }

    /**
     * @param string $relation
     */
    public function setRelation(?string $relation)
    {
        $this->relation = $relation;
    }

    /**
     * @return string
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     */
    public function setCondition(?string $condition)
    {
        $this->condition = $condition;
    }
}