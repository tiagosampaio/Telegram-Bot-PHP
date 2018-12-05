<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandMultipartAbstract;

/**
 * Class SendAnimation
 * @package Telegram\Command\Method
 */
class SendAnimation extends CommandMultipartAbstract implements SendAnimationInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'sendAnimation';
    
    /**
     * @param string|int $chatId
     *
     * @return $this
     */
    public function setChatId($chatId)
    {
        return $this->setData('chat_id', $chatId);
    }
    
    /**
     * @param $animation
     *
     * @return $this
     */
    public function setAnimation($animation)
    {
        return $this->setData('animation', $animation);
    }
    
    /**
     * @return string
     */
    protected function getMultipartFileType()
    {
        return 'animation';
    }
}
