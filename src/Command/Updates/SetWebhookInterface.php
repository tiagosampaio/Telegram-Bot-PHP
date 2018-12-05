<?php

declare(strict_types = 1);

namespace Telegram\Command\Updates;

use Telegram\Command\CommandInterface;

/**
 * Interface SetWebhookInterface
 * @package Telegram\Command\Updates
 */
interface SetWebhookInterface extends CommandInterface
{
    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url);
    
    /**
     * @param $certificate
     * @return $this
     */
    public function setCertificate($certificate);
    
    /**
     * @param int $maxConnections
     * @return $this
     */
    public function setMaxConnections(int $maxConnections);
    
    /**
     * @param array $allowedUpdates
     * @return $this
     */
    public function setAllowedUpdates(array $allowedUpdates);
}
