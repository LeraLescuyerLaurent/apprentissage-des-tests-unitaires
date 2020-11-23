<?php

$name = $_GET['name'];
header('content-type: text/html');

http_response_code(200);


echo "hello $name";