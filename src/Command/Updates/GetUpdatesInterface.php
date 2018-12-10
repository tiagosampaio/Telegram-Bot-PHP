<?php

declare(strict_types = 1);

namespace Telegram\Command\Updates;

use Telegram\Command\CommandInterface;

/**
 * Notes:
 * 1. This method will not work if an outgoing webhook is set up.
 * 2. In order to avoid getting duplicate updates, recalculate offset after each server response.
 *
 * Interface GetUpdatesInterface
 * @package Telegram\Command\Updates
 */
interface GetUpdatesInterface extends CommandInterface
{
    
    /**
     * @param int $offset
     * @return mixed
     */
    public function setOffset(int $offset);
    
    /**
     * @param int $limit
     * @return mixed
     */
    public function setLimit(int $limit);
    
    /**
     * @param int $timeout
     * @return mixed
     */
    public function setTimeout(int $timeout);
    
    /**
     * @param array $updates
     * @return mixed
     */
    public function setAllowedUpdates(array $updates);
}
