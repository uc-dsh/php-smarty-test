<?php
require_once(__DIR__."/app/app.php");
$array = [
    [
        "name" => "User1",
        "email" => "user1@mail.com",
        "pass" => "1234"
    ],
    [
        "name" => "User2",
        "email" => "user2@mail.com",
        "pass" => "1234"
    ],
    [
        "name" => "User3",
        "email" => "user3@mail.com",
        "pass" => "3234"
    ],
    [
        "name" => "User4",
        "email" => "user4@mail.com",
        "pass" => "4234"
    ],
    [
        "name" => "User5",
        "email" => "user5@mail.com",
        "pass" => "5234"
    ],
    
];

$smarty->assign("array", $array);
$smarty->display("./templates/question3.tpl");