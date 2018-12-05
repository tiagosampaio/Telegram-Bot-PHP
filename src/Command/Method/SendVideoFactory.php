<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SendVideoFactory
 * @package Telegram\Command\Method
 */
class SendVideoFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = SendVideoInterface::class;
}
