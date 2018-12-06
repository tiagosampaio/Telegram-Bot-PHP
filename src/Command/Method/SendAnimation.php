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
    use Parts\Chat;

    /**
     * {@inheritdoc}
     */
    protected $urlPath = 'sendAnimation';
    
    /**
     * {@inheritdoc}
     */
    public function setAnimation($animation)
    {
        return $this->setData('animation', $animation);
    }
    
    /**
     * {@inheritdoc}
     */
    protected function getMultipartFileType()
    {
        return 'animation';
    }
}
