<?php

namespace  TWITTER\Http;

class Response
{
    protected string $content = '';
    protected array $headers = [];
    protected int $statusCode = 200;

    public function __construct(string $content ="", int $statusCode = 200, array $headers = ['Content-Type' => 'text/html'])
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
    public function send(){
        //entete
        foreach($this->headers as $key => $value){
            // var_dump($this->headers);
        
            header($key.': '. $value);
            
        }
        // header
        // var_dump($this->statusCode);
        http_response_code($this->statusCode);
        //content
        // var_dump($this->content);
        echo $this->content;



    }
}



