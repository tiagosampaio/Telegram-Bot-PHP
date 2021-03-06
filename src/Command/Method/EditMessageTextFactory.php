<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class EditMessageTextFactory
 * @package Telegram\Method
 */
class EditMessageTextFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = EditMessageTextInterface::class;
}
