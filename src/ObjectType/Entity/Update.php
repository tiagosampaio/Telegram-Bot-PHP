<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\ObjectType\EntityAbstract;

/**
 * Class Update
 * @package Telegram\ObjectType\Entity
 */
class Update extends EntityAbstract implements UpdateInterface
{
    /**
     * @var MessageFactory
     */
    private $messageFactory;
    
    /**
     * Update constructor.
     *
     * @param \Telegram\Framework\Data\SerializerInterface $serializer
     * @param MessageFactory                               $messageFactory
     * @param array                                        $data
     */
    public function __construct(
        \Telegram\Framework\Data\SerializerInterface $serializer,
        MessageFactory $messageFactory,
        array $data
    ) {
        parent::__construct($serializer, $data);
        $this->messageFactory = $messageFactory;
        $this->init();
    }
    
    private function init()
    {
        $this->setData('message', $this->messageFactory->create(['data' => $this->data['message']]));
    }
    
    /**
     * @return MessageInterface
     */
    public function getMessage() : MessageInterface
    {
        return $this->getData('message');
    }
    
    /**
     * @return integer
     */
    public function getUpdateId()
    {
        return $this->getData('update_id');
    }
}
