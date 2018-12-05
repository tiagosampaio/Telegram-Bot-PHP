<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class UpdatesFactory
 *
 * @package Telegram\ObjectType\Entity
 */
class UpdatesFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = UpdatesInterface::class;
}
