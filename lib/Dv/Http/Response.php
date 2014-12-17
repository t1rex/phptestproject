<?php
namespace Dv\Http;


class Response
{
    protected $headers = array(
        'Content-Type:' => 'text/html;'
    );

    protected $body = '';

    protected static $isSent = false;

    public function setHeader($header)
    {

    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function send()
    {
        if (self::$isSent) {
            throw new \Exception('Response has already been sent. Can not sent headers and response twice!');
        }

        foreach ($this->headers as $header => $value) {
            header($header . $value);
        }
        headers_sent();
        echo $this->body;
    }
}