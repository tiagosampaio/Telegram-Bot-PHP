<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class DeleteMessageFactory
 * @package Telegram\Method
 */
class DeleteMessageFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = DeleteMessageInterface::class;
}
