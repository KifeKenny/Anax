<?php
/**
 * Routes for controller.
 */
return [
    "routes" => [
        [
            "info" => "Controller index.",
            "requestMethod" => "get",
            "path" => "",
            "callable" => ["Comment2Controller", "getIndex"],
        ],
        [
            "info" => "Create comment",
            "requestMethod" => "get|post",
            "path" => "create",
            "callable" => ["Comment2Controller", "comment2Create"],
        ],
        [
            "info" => "Update an comment",
            "requestMethod" => "get|post",
            "path" => "edit/{id:digit}",
            "callable" => ["Comment2Controller", "comment2Update"],
        ],
        [
            "info" => "Delete an Comment.",
            "requestMethod" => "get|post",
            "path" => "delete/{id:digit}",
            "callable" => ["Comment2Controller", "comment2Delete"],
        ],
    ]
];
