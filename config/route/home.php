<?php
$app->router->add("test", function () use ($app) {
    $data = [
        "page" => "test/test",
        "title" => "test",
        "res" => null
    ];
    $app->ownrenderPage($data);
});
