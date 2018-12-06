<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class EditMessageMediaFactory
 * @package Telegram\Method
 */
class EditMessageMediaFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = EditMessageMediaInterface::class;
}
