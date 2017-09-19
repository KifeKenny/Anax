<?php

return [
    "dsn"             => "mysql:host=localhost;dbname=usercomments;",
    "username"        => "admin",
    "password"        => "test",
    "driver_options"  => [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
    // "fetch_mode"      => \PDO::FETCH_OBJ,
    // "table_prefix"    => null,
    // "session_key"     => "Anax\Database",

    // True to be very verbose during development
    // "verbose"         => null,

    // True to be verbose on connection failed
    // "debug_connect"   => false,
];

// return [
//     "dsn"             => "mysql:host=blu-ray.student.bth.se;dbname=kejo15;",
//     "username"        => "kejo15",
//     "password"        => "HYh4gyrpPtxU",
//     "driver_options"  => [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
//     // "fetch_mode"      => \PDO::FETCH_OBJ,
//     // "table_prefix"    => null,
//     // "session_key"     => "Anax\Database",
//
//     // True to be very verbose during development
//     // "verbose"         => null,
//
//     // True to be verbose on connection failed
//     // "debug_connect"   => false,
// ];
