<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Work</title>

    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
        .tg .tg-vkov{background-color:#32cb00;text-align:center}
        .tg .tg-s6z2{text-align:center}
        .tg .tg-ci37{background-color:#ecf4ff;text-align:center}
        .tg .tg-yw4l{vertical-align:top;text-align:center}
        @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}
    </style>
</head>

<?php
require_once realpath(dirname(__FILE__)) . '/..' . DIRECTORY_SEPARATOR  . "defines.php";

$url = $_POST['url'];
require_once (realpath(dirname(__FILE__) . "/../scripts/table.php"));
require_once (realpath(dirname(__FILE__) . "/../scripts/c_file_exists.php"));

//require_once SCRIPTS . DS . 'c_file_exists.php';
