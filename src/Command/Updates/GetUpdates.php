<?php

declare(strict_types = 1);

namespace Telegram\Command\Updates;

use Telegram\Command\CommandAbstract;

/**
 * Class GetUpdates
 * @package Telegram\Method\Updates
 */
class GetUpdates extends CommandAbstract implements GetUpdatesInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'getUpdates';
    
    /**
     * {@inheritdoc}
     */
    public function setOffset(int $offset)
    {
        $this->setData('offset', $offset);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setLimit(int $limit)
    {
        $this->setData('limit', $limit);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setTimeout(int $timeout)
    {
        $this->setData('timeout', $timeout);
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setAllowedUpdates(array $updates)
    {
        $this->setData('allowed_updates', $updates);
        return $this;
    }
}
