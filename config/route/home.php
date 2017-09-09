<?php
$app->router->add("test", function () use ($app) {
    $data = [
        "page" => ["test/test"],
        "title" => "test",
        "res" => null,
        "style" => "css/style.css"
    ];
    $app->ownrenderPage($data);
});

$app->router->add("comment/edit", function () use ($app) {
    $id = getGet("id");
    $res = $app->comController->getComId($id, "Messages");
    $data = [
        "page" => ["normal/comEdit"],
        "title" => "Edit | Comment",
        "res" => $res,
        "style" => "../css/style.css"
    ];
    $data["res"]["result"] = "0";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data["res"]["result"] = "2";
        $values = ["comEdiTitle", "comEdiMail", "comEdiText"];
        $keys = ["Title", "Mail", "Text"];
        $mes = "Messages";
        $result = $app->comController->editCom($id, $mes, $values, $keys);

        if ($result) {
            $data["res"] = $app->comController->getComId($id, "Messages");
            $data["res"]["result"] = "1";
            # code...
        }
    }
    $app->ownrenderPage($data);
});



$app->router->add("comment", function () use ($app) {
    $id = getGet("id");
    $data = [
        "page" => ["normal/comment"],
        "title" => "Comment",
        "res" => "null",
        "style" => "css/style.css"
    ];

    $app->comController->delId($id, "Messages");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $values = ["comTitle", "comMail", "comText"];
        $keys = ["Title", "Mail", "Text"];
        $mes = "Messages";
        $result = $app->comController->addComment(
            $values,
            $keys,
            $mes
        );
        $data["res"] = "2";

        if ($result != false) {
            $data["res"] = "1";
        }
    }
    $app->ownrenderPage($data);
});
