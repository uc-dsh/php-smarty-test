<?php
require_once(__DIR__ . "/app/app.php");
$options = [
    "1" => "option1",
    "2" => "option2",
    "3" => "option3",
    "4" => "option4",
];

$smarty->assign("select", $options);
$smarty->display("./templates/question1.tpl");