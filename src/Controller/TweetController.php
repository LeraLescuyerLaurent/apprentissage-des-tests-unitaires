<?php

namespace TWITTER\Controller;

use TWITTER\Http\Response;
use TWITTER\Model\TweetModel;

class TweetController {

    protected TweetModel $model;


    function __construct(TweetModel $model)
    {
        $this->model = $model;
    }


    function saveTweet():Response{
        $this->model->save($_POST['author'], $_POST['content']);
        return new Response('', 302,[
            'Location' => '/'
        ]);
    }
}