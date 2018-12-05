<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class GetMeFactory
 *
 * @package Telegram\ObjectType\Entity
 */
class GetMeFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = GetMeInterface::class;
}
