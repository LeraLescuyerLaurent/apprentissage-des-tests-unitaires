<?php

use TWITTER\Model\TweetModel;
use PHPUnit\Framework\TestCase;
use TWITTER\Controller\TweetController;

class TweetControllerTest extends TestCase{
    /**@test */
    function test_a_user_can_save_a_tweet(){
  // et je m attend a avoir un tweet dans la base de données
        $pdo = new \PDO('mysql:host=localhost:3308;dbname=live_test;charset=utf8','root','llllll', [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ]);

        //SETUP : on vide la table tweet
        $pdo->query('DELETE FROM tweet');
         
        // Etant donné a une requete POST vers tweet.php
        // et que content et authors sont présents
        $_POST['author'] = "NomDeAuthor";
        $_POST['content'] = "ceci est le content";
        // quand mon controller prent la main
        $tweetModel = new TweetModel($pdo);
        $controller = new TweetController($tweetModel);
        $response = $controller->saveTweet();

        // alors je m'attend a etre redirigé a etre regirigé vers  /
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertArrayHasKey('Location', $response->getHeaders());
        $this->assertEquals('/',$response->getHeaders()['Location']);

        $result= $pdo->query('SELECT t.* FROM tweet AS t');
        $this->assertEquals(1, $result->rowCount());
        $data = $result->fetch();
        $this->assertEquals('NomDeAuthor',$data['author']);
        $this->assertEquals('ceci est le content',$data['content']);

        // et le tweet a le bon auteur et le bon contenue



    }    
}