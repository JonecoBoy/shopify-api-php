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

use Doctrine\Inflector\InflectorFactory;
use Doctrine\Inflector\Inflector as DoctrineInflector;

final class Inflector
{
    /**
     * @var DoctrineInflector|null
     */
    protected static ?DoctrineInflector $inflector = null;

    protected static function getInflector(): DoctrineInflector
    {
        if (null !== Inflector::$inflector) {
            return Inflector::$inflector;
        }
        return Inflector::$inflector = InflectorFactory::create()->build();
    }

    public static function pluralize(string $word): string
    {
        return Inflector::getInflector()->pluralize($word);
    }

    public static function tableize(string $word): string
    {
        return Inflector::getInflector()->tableize($word);
    }

    public static function classify(string $word): string
    {
        return Inflector::getInflector()->classify($word);
    }


    public static function singularize(string $word)
    {
        return Inflector::getInflector()->singularize($word);
    }
}