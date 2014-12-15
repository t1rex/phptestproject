<?php
namespace Dv\Core;

trait ParameterBag
{
    protected $data = array();

    public function __get($variableName)
    {
        if (isset($this->data[$variableName])) {
            return $this->data[$variableName];
        }
        return false;
    }

    public function __set($variableName, $value)
    {
        $this->data[$variableName] = $value;
    }
}