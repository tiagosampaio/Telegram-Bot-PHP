<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class SendDocument
 * @package Telegram\Command\Method
 */
class SendDocument extends CommandAbstract implements SendDocumentInterface
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
     * @return array
     */
    public function toArray()
    {
        $result = [];
        
        foreach (parent::toArray() as $key => $value) {
            if ($key == 'document') {
                $value = fopen($value, 'r');
            }
            
            $result[] = [
                'name'     => $key,
                'contents' => $value,
            ];
        }
        
        return $result;
    }
}
