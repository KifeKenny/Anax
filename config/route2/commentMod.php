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
            "callable" => ["comment2Controller", "getIndex"],
        ],
        [
            "info" => "Create comment",
            "requestMethod" => "get|post",
            "path" => "create",
            "callable" => ["comment2Controller", "comment2Create"],
        ],
        [
            "info" => "Update an comment",
            "requestMethod" => "get|post",
            "path" => "edit/{id:digit}",
            "callable" => ["comment2Controller", "comment2Update"],
        ],
        [
            "info" => "Delete an Comment.",
            "requestMethod" => "get|post",
            "path" => "delete/{id:digit}",
            "callable" => ["comment2Controller", "comment2Delete"],
        ],
        // [
        //     "info" => "set session (mostly for testing)",
        //     "requestMethod" => "get|post",
        //     "path" => "setUser",
        //     "callable" => ["Comment2Controller", "setUser"],
        // ],
    ]
];
