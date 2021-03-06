<?php

//This file is autogenerated. See modules.json and autogenerator.py for details

/*
    get_help.php

    MediaWiki API Demos
    Demo of `Help` module: Get help for a specified module.

    MIT License
*/

$endPoint = "https://en.wikipedia.org/w/api.php";
$params = [
    "action" => "help",
    "modules" => "query+tokens",
    "wrap" => "",
    "format" => "json"
];

$url = $endPoint . "?" . http_build_query( $params );

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close( $ch );

$result = json_decode( $output, true );
var_dump( $result );
