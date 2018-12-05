<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SendMessageFactory
 * @package Telegram\Command\Method
 */
class SendMessageFactory extends FactoryAbstract
{
    
    /**
     * @var string
     */
    protected $objectClass = SendMessageInterface::class;
}
