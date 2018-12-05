<?php

namespace Telegram\Framework\Data;

/**
 * Class ObjectData
 * @package Telegram\Framework\Data
 */
class ObjectData implements ObjectDataInterface, \ArrayAccess
{
    /**
     * @var array
     */
    protected $data = [];
    
    /**
     * ObjectData constructor.
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getData(string $key = null)
    {
        if (is_array($key)) {
            return $this->data;
        }
        
        if (!isset($this->data[$key])) {
            return null;
        }
        
        return $this->data[$key];
    }
    
    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        if (is_array($key)) {
            $this->data = (array) $key;
        }
        
        if (!is_array($key)) {
            $this->data[$key] = $value;
        }
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function addData(array $data = [])
    {
        foreach ($data as $key => $value) {
            if (empty($key) || empty($value)) {
                continue;
            }
            
            $this->data[$key] = $value;
        }
        
        return $this;
    }
    
    /**
     * @param string $key
     *
     * @return bool
     */
    public function hasData(string $key)
    {
        return (bool) isset($this->data[$key]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function resetData()
    {
        $this->data = [];
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function debug()
    {
        return (array) $this->data;
    }
    
    /**
     * {@inheritdoc}
     */
    public function export(array $keys = [])
    {
        if (empty($keys)) {
            return (array) $this->data;
        }
        
        $result = [];
        
        /** @var string $key */
        foreach ($keys as $key) {
            $result[$key] = $this->getData($key);
        }
        
        return (array) $result;
    }
    
    /**
     * Implementation of ArrayAccess::offsetSet()
     *
     * @link http://www.php.net/manual/en/arrayaccess.offsetset.php
     * @param string $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }
    
    /**
     * Implementation of ArrayAccess::offsetExists()
     *
     * @link http://www.php.net/manual/en/arrayaccess.offsetexists.php
     * @param string $offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }
    
    /**
     * Implementation of ArrayAccess::offsetUnset()
     *
     * @link http://www.php.net/manual/en/arrayaccess.offsetunset.php
     * @param string $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }
    
    /**
     * Implementation of ArrayAccess::offsetGet()
     *
     * @link http://www.php.net/manual/en/arrayaccess.offsetget.php
     * @param string $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->_data[$offset]) ? $this->data[$offset] : null;
    }
}
