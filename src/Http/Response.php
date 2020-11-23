<?php

namespace  TWITTER\Http;

class Response
{
    protected string $content = '';
    protected array $headers = [];
    protected int $statusCode = 200;

    public function __construct(string $content ="", int $statusCode = 200, array $headers =[])
    {
        $this->content = $content;
        $this->statusCode = $statusCode;
        $this->headers = $headers;
    }
    public function getStatusCode():int {
        return $this->statusCode;
    }
    public function setStatusCode(int $statusCode){
        $this->statusCode = $statusCode;
    }
    public function getHeaders(): array {
        return $this->headers;
    }
    public function setHeaders(array $headers){
        $this->headers = $headers;
    }
    public function getContent(): string {
        return $this->content;
    }
    public function setContent(string $content){
        $this->content = $content;
    }

}



