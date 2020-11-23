<?php

use PHPUnit\Framework\TestCase;

use TWITTER\Controller\HelloController;

use function PHPUnit\Framework\assertEquals;

class indexTest extends TestCase 
{
    // public function test_index_shows_good_hello()
    // {
        // $_GET['name'] = 'liord';
        // ob_start();
        // include "index.php";
        // $resultat = ob_get_clean();
// 
// 
        // $this.assertEquals("hello laurent", $resultat);
// 
    // }


    public function test_home_page_sey_hello(){
        //Given action initial
        $_GET['name'] = "laurent";
        // When (action , perturbation)
        $controller = new HelloController();
        $response = $controller->hello();
        //  then (alors je m attend à quoi ??)
        $this->assertEquals("Hello laurent", $response->getContent());
        $this->assertEquals(200, $response->getStatusCode());
        /** si dans le header le Content-Type doit contenir text/html */
        $contentHeader = $response->getHeaders()['Content-Type'] ?? null;
        $this->assertEquals('text/html', $contentHeader);

    }
}
