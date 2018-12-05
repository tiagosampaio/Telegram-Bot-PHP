<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\ObjectType\EntityAbstract;

/**
 * Interface WebhookInfoInterface
 *
 * @package Telegram\ObjectType\Entity
 */
class WebhookInfo extends EntityAbstract implements WebhookInfoInterface
{
    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return (string) $this->getData(self::FIELD_URL);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getHasCustomCertificate()
    {
        return $this->getData(self::FIELD_HAS_CUSTOM_CERTIFICATE);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getPendingUpdateCount()
    {
        return $this->getData(self::FIELD_PENDING_UPDATE_COUNT);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getLastErrorDate()
    {
        return $this->getData(self::FIELD_LAST_ERROR_DATE);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getLastErrorMessage()
    {
        return $this->getData(self::FIELD_LAST_ERROR_MESSAGE);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getMaxConnections()
    {
        return $this->getData(self::FIELD_MAX_CONNECTIONS);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getAllowedUpdates()
    {
        return (array) $this->getData(self::FIELD_ALLOWED_UPDATES);
    }
}
