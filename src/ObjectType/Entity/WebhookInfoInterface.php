<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

/**
 * Interface WebhookInfoInterface
 * @package Telegram\ObjectType\Entity
 */
interface WebhookInfoInterface
{
    /**
     * @var string
     */
    const FIELD_URL = 'url';
    
    /**
     * @var string
     */
    const FIELD_HAS_CUSTOM_CERTIFICATE = 'has_custom_certificate';
    
    /**
     * @var string
     */
    const FIELD_PENDING_UPDATE_COUNT = 'pending_update_count';
    
    /**
     * @var string
     */
    const FIELD_LAST_ERROR_DATE = 'last_error_date';
    
    /**
     * @var string
     */
    const FIELD_LAST_ERROR_MESSAGE = 'last_error_message';
    
    /**
     * @var string
     */
    const FIELD_MAX_CONNECTIONS = 'max_connections';
    
    /**
     * @var string
     */
    const FIELD_ALLOWED_UPDATES = 'allowed_updates';
    
    /**
     * @return string
     */
    public function getUrl();
    
    /**
     * @return boolean
     */
    public function getHasCustomCertificate();
    
    /**
     * @return integer
     */
    public function getPendingUpdateCount();
    
    /**
     * @return integer
     */
    public function getLastErrorDate();
    
    /**
     * @return string
     */
    public function getLastErrorMessage();
    
    /**
     * @return integer
     */
    public function getMaxConnections();
    
    /**
     * @return array
     */
    public function getAllowedUpdates();
}
