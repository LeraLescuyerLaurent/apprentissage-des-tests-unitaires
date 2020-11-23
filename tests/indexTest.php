<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class indexTest extends TestCase 
{
    public function test_index_shows_good_hello()
    {
        $_GET['name'] = 'liord';
        ob_start();
        include "index.php";
        $resultat = ob_get_clean();


        $this.assertEquals("hello laurent", $resultat);

    }
}
