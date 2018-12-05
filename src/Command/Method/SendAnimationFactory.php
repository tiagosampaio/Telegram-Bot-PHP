<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SendAnimationFactory
 * @package Telegram\Command\Method
 */
class SendAnimationFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = SendAnimationInterface::class;
}
