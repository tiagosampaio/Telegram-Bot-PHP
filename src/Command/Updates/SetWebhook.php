<?php

declare(strict_types = 1);

namespace Telegram\Command\Updates;

use Telegram\Command\CommandAbstract;

/**
 * Class SetWebhook
 * @package Telegram\Method\Updates
 */
class SetWebhook extends CommandAbstract implements SetWebhookInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'setWebhook';
    
    /**
     * {@inheritdoc}
     */
    public function setUrl(string $url)
    {
        $this->setData('url', $url);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setCertificate($certificate)
    {
        $this->setData('certificate', $certificate);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setMaxConnections(int $maxConnections)
    {
        $this->setData('max_connections', (int) $maxConnections);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setAllowedUpdates(array $allowedUpdates)
    {
        $this->setData('allowed_updates', (array) $allowedUpdates);
        return $this;
    }
}
