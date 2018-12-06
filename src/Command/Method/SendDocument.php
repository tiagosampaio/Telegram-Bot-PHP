<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandMultipartAbstract;

/**
 * Class SendDocument
 * @package Telegram\Command\Method
 */
class SendDocument extends CommandMultipartAbstract implements SendDocumentInterface
{
    use Parts\Chat;

    /**
     * {@inheritdoc}
     */
    protected $urlPath = 'sendDocument';
    
    /**
     * {@inheritdoc}
     */
    public function setDocument($document)
    {
        return $this->setData('document', $document);
    }
    
    /**
     * {@inheritdoc}
     */
    protected function getMultipartFileType()
    {
        return 'document';
    }
}
