<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class ChatFactory
 *
 * @package Telegram\ObjectType\Entity
 */
class ChatPhotoFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = ChatPhotoInterface::class;
}
