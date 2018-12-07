<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\ObjectType\EntityAbstract;

/**
 * Class Updates
 * @package Telegram\ObjectType\Entity
 */
class Updates extends EntityAbstract implements UpdatesInterface, \Iterator
{
    /**
     * @var UpdateFactory
     */
    private $updateFactory;
    
    /**
     * Updates constructor.
     *
     * @param UpdateFactory                                $updateFactory
     * @param \Telegram\Framework\Data\SerializerInterface $serializer
     * @param array                                        $data
     */
    public function __construct(
        UpdateFactory $updateFactory,
        \Telegram\Framework\Data\SerializerInterface $serializer,
        array $data = []
    ) {
        parent::__construct($serializer, ['updates' => (array) $data]);
        
        $this->updateFactory = $updateFactory;
        $this->init();
    }
    
    private function init()
    {
        if (!$this->canInitialize()) {
            return;
        }
        
        /** @var array $update */
        foreach ($this->data['updates'] as $key => $update) {
            $this->data['updates'][$key] = $this->updateFactory->create(['data' => $update]);
        }
    }
    
    /**
     * @return array
     */
    public function getUpdates() : array
    {
        return (array) $this->getData('updates');
    }
    
    /**
     * Return the current element
     *
     * @link  https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return current($this->data['updates']);
    }
    
    /**
     * Move forward to next element
     *
     * @link  https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        next($this->data['updates']);
    }
    
    /**
     * Return the key of the current element
     *
     * @link  https://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return key($this->data['updates']);
    }
    
    /**
     * Checks if current position is valid
     *
     * @link  https://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        $key = key($this->data['updates']);
    
        if (null === $key || false === $key) {
            return false;
        }
    
        return true;
    }
    
    /**
     * Rewind the Iterator to the first element
     *
     * @link  https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        reset($this->data['updates']);
    }
}
