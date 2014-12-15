<?php
namespace Dv\Http;


class Request
{
    protected $path = '';

    protected $params = array();

    protected $paramSources = array('_GET', '_POST');

    public function __construct()
    {
        $this->path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
        $this->params = $_GET;
        if (isset($_POST)) {
            $this->params = array_merge($this->params, $_POST);
        }
    }

    public function getParam()
    {

    }

    public function getPath()
    {
        return $this->path;
    }

    public function isPost()
    {

    }
}