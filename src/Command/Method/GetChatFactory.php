<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class GetChatFactory
 * @package Telegram\Method
 */
class GetChatFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = GetChatInterface::class;
}
