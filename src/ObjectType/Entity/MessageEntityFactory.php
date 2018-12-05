<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class MessageEntityFactory
 * @package Telegram\ObjectType\Entity
 */
class MessageEntityFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = MessageEntityInterface::class;
}
