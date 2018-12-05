<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SendContactFactory
 * @package Telegram\Command\Method
 */
class SendContactFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = SendContactInterface::class;
}
