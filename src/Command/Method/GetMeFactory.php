<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class GetMeFactory
 * @package Telegram\Method
 */
class GetMeFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = GetMeInterface::class;
}
