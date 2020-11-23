<?php
namespace TWITTER\Controller;

use TWITTER\Http\Response;

class HelloController{
    /**
     * fonction 1 base 1
     *  public function hello(): Response{
     *  $name = $_GET['name'];
     *  return new Response("Hello $name");
     * }
     */


    public function hello(): Response{
        $name = $_GET['name'];
        return new Response("Hello $name");
    }
}