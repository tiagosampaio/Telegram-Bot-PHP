<?php

namespace Telegram\Framework\Data;

interface ObjectDataInterface
{
    
    /**
     * @param string $key
     * @return mixed
     */
    public function getData(string $key = null);
    
    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function setData($key, $value = null);
    
    /**
     * @param array $data
     * @return $this
     */
    public function addData(array $data = []);
    
    /**
     * @return $this
     */
    public function resetData();
    
    /**
     * @return array
     */
    public function debug();
    
    /**
     * @param array $fields
     *
     * @return array
     */
    public function export(array $fields = []);
}
