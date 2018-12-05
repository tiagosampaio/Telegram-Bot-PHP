<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SendAudioFactory
 * @package Telegram\Command\Method
 */
class SendAudioFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = SendAudioInterface::class;
}
