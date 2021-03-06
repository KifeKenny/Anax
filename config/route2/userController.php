<?php
/**
 * Routes for user controller.
 */
 // BookController
return [
    "routes" => [
        [
            "info" => "User Controller index.",
            "requestMethod" => "get",
            "path" => "profile",
            "callable" => ["userController", "profile"],
        ],
        [
            "info" => "Login a user.",
            "requestMethod" => "get|post",
            "path" => "login",
            "callable" => ["userController", "getPostLogin"],
        ],
        [
            "info" => "Create a user.",
            "requestMethod" => "get|post",
            "path" => "create",
            "callable" => ["userController", "getPostCreateUser"],
        ],
        [
            "info" => "Logout user",
            "requestMethod" => "get",
            "path" => "logout",
            "callable" => ["userController", "logoutUser"],
        ],
        [
            "info" => "Edit profile",
            "requestMethod" => "get|post",
            "path" => "edit/{id:digit}",
            "callable" => ["userController", "editProfile"],
        ],
        [
            "info" => "get all profiles profile",
            "requestMethod" => "get",
            "path" => "admin/profiles",
            "callable" => ["userController", "adminIndex"],
        ],
        [
            "info" => "get profile delete page",
            "requestMethod" => "get|post",
            "path" => "admin/delete/{id:digit}",
            "callable" => ["userController", "adminDelete"],
        ],
    ]
];
