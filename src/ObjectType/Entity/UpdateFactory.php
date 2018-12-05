<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class UpdateFactory
 *
 * @package Telegram\ObjectType\Entity
 */
class UpdateFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = UpdateInterface::class;
}
