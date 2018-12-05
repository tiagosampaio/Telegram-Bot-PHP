<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class UserFactory
 *
 * @package Telegram\ObjectType\Entity
 */
class UserFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = UserInterface::class;
}
