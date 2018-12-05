<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SendDocumentFactory
 * @package Telegram\Command\Method
 */
class SendDocumentFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = SendDocumentInterface::class;
}
