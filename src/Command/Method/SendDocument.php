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
    /**
     * @var string
     */
    protected $urlPath = 'sendDocument';
    
    /**
     * {@inheritdoc}
     */
    public function setChatId(int $chatId)
    {
        return $this->setData('chat_id', $chatId);
    }
    
    /**
     * {@inheritdoc}
     */
    public function setDocument($document)
    {
        return $this->setData('document', $document);
    }
    
    /**
     * @return string
     */
    protected function getMultipartFileType()
    {
        return 'document';
    }
}
