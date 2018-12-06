<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class EditMessageCaptionFactory
 * @package Telegram\Method
 */
class EditMessageCaptionFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = EditMessageCaptionInterface::class;
}
