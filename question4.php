<?php
require_once(__DIR__."/app/app.php");
$str1 =  "Hello";
$str2  = "World";

$smarty->assign(
    [
        "str1" => $str1,
        "str2" => $str2,
    ]
);

$smarty->display("question4.tpl");