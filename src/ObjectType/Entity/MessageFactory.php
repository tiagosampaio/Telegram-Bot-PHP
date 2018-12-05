<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class MessageFactory
 *
 * @package Telegram\ObjectType\Entity
 */
class MessageFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = MessageInterface::class;
}
