<?php
require_once(__DIR__ . "/app/app.php");

$our_culture = array(
    array(
        "point_one" => "To be the best in the world.",
    ),
    array(
        "point_two" => "We produce results.",
    ),
    array(
        "point_three" => "We keep our word - We do what we say we will do.",
    ),
    array(
        "point_four" => "Coach, mentor and help the team grow."
    )
);

$smarty->assign("our_culture", $our_culture);
$smarty->display("./templates/question8.tpl");
