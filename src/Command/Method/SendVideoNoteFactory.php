<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SendVideoNoteFactory
 * @package Telegram\Command\Method
 */
class SendVideoNoteFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = SendVideoNoteInterface::class;
}
