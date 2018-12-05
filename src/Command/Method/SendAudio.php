<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class SendAudio
 * @package Telegram\Command\Method
 */
class SendAudio extends CommandAbstract implements SendAudioInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'sendAudio';
    
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
    public function setAudio($audio)
    {
        return $this->setData('audio', $audio);
    }
    
    /**
     * @return array
     */
    public function toArray()
    {
        $result = [];
        
        foreach (parent::toArray() as $key => $value) {
            if ($key == 'audio') {
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
