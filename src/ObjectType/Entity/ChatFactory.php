<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class ChatFactory
 *
 * @package Telegram\ObjectType\Entity
 */
class ChatFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = ChatInterface::class;
}
