<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class EditMessageReplyMarkupFactory
 * @package Telegram\Method
 */
class EditMessageReplyMarkupFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = EditMessageReplyMarkupInterface::class;
}
