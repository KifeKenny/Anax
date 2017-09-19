<?php
/**
 * Routes for the REM Server.
 */
return [
    "routes" => [
        [
            "info" => "show comment page and delete a comment if id is valid",
            "requestMethod" => "get",
            "path" => "comment",
            "callable" => ["comController", "deleteComment"]
        ],
        [
            "info" => "add comment",
            "requestMethod" => "post",
            "path" => "comment",
            "callable" => ["comController", "addcomentPrivate"]
        ],
        [
            "info" => "edit comment get comment",
            "requestMethod" => "get",
            "path" => "comment/edit",
            "callable" => ["comController", "editPageGet"]
        ],
        [
            "info" => "edit comment change comment action",
            "requestMethod" => "post",
            "path" => "comment/edit",
            "callable" => ["comController", "editPage"]
        ],
    ]
];
