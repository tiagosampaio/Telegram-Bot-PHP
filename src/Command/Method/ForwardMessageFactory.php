<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class ForwardMessageFactory
 * @package Telegram\Method
 */
class ForwardMessageFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = ForwardMessageInterface::class;
}
