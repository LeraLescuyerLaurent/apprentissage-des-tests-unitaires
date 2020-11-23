<?php
namespace TWITTER\Controller;

use TWITTER\Http\Response;

class HelloController{
    

    public function hello(): Response{
        $name = $_GET['name'];
        return new Response("Hello $name");
    }
}