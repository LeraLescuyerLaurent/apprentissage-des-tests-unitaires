<?php

namespace TWITTER\Controller;

use TWITTER\Http\Response;

class TweetController {

    function saveTweet():Response{
        return new Response('', 302,[
            'Location' => '/'
        ]);
    }
}