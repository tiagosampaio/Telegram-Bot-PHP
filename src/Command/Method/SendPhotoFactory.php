<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SendPhotoFactory
 * @package Telegram\Command\Method
 */
class SendPhotoFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = SendPhotoInterface::class;
}
