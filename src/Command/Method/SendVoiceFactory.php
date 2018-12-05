<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SendVoiceFactory
 * @package Telegram\Command\Method
 */
class SendVoiceFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = SendVoiceInterface::class;
}
